<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
use PHPHtmlParser\Dom;

class Crawler extends CI_Controller
{
  public function add()
  {
    $post_data = $this->input->post();
    $w_id = $post_data['w_id'];
    $this->load->model('Wishlists');
    $url_array = $this->parse_url($post_data['urls']);
    $results = array();
    foreach ($url_array as $key => $value) {


      // $start = strpos($value, 'subject') + 8;
      // $end = $start;
      // for (; is_numeric($value[$end]); $end++) {}
      // $id = substr($value, $start, $end - $start);
      $temp = [];
      preg_match('/([0-9]+)/i', $value, $temp);
      $id = $temp[0];
      $results[] = $this->get_info($id);
      
      $wishlist = Wishlists::findByIds($w_id);
      $wishlist->is_stocked_in = 1;
      $wishlist->save(TRUE);
    }

    $this->load->model('Books');
    Books::insert_batch($results);
  }

  private function parse_url($str)
  {
    $results = explode(';', $str);
    return $results;
  }

  private function get_info($id)
  {
    $json_content = file_get_contents('https://api.douban.com/v2/book/'.$id);
    $obj = json_decode($json_content);
    $tag_count = count($obj->tags);
    $tag_count = $tag_count > 3 ? 3 : $tag_count;
    $tags = "";
    $i = 0;
    for (; $i < $tag_count - 1; $i++) {
      $tags .= ($obj->tags[$i]->name.', ');
    }
    $tags .= $obj->tags[$i]->name;
    return array(
      'name' => $obj->title,
      'author' => $obj->author[0],
      'cover' => $obj->image,
      'publisher' => $obj->publisher,
      'link' => $obj->alt,
      'description' => $obj->summary,
      'price' => $obj->price,
      'tag' => $tags,
    );
  }
}
