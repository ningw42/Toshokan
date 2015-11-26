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
    $url_array = $this->parse_url($post_data['urls']);
    $results = array();
    foreach ($url_array as $key => $value) {
      $results[] = $this->get_html($value);
    }
  }

  private function parse_url($str)
  {
    $results = explode(';', $str);
    return $results;
  }

  private function get_html($url)
  {
    $dom = new Dom;
    $dom->load($url);
    $info = $dom->find('#info', 0);
    echo $info;
  }

  private function parse_html($html)
  {
    return array(
      'name' => $name,
      'author' => $author
    );
  }
}
