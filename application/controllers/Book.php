<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

  public function lend()
  {
    $inputs = $this->input->post();
    $bid = $inputs['bid'];
    // HARD CODE HERE
    $uid = $inputs['uid'] ? $insputs['uid'] : 2;

    $this->load->model('books');
    $book = Books::findByIds($bid);
    if ($book->inventory > 0) {
      $book->inventory -= 1;
      $book->borrow_times += 1;
      $book->save();

      $bt = time();
      $data = array(
        'user_id' => $uid,
        'book_id' => $bid,
        'book_name' => $book->name,
        'borrow_time' => $bt,
        'due' => $bt + (7 * 24 * 60 * 60),
        'is_returned' => 0,
      );
      $this->load->model('records');
      Records::insert($data);
      echo "success";
    } else {
      echo "failed";
    }
  }

  public function ret($bid, $rid)
  {
    $this->load->model('books');
    $book = Books::findByIds($bid);
    $book->inventory += 1;
    $book->save();
    $this->load->model('records');
    $record = Records::findByIds($rid);
    $record->is_returned = 1;
    $record->save();
  }

  public function add()
  {

  }

  public function index($id = NULL)
  {
    if ($id == NULL) {
      $res = array(
        'heading' => '404',
        'message' => 'no such book'
      );
      $this->load->view('errors/html/error_404', $res);
    }
    else {
      $this->load->model('Books');
      $book = Books::findByIds($id);
      // $comments = Comment::findOnCond();
      // TO DO
      $data = array(
        'book' => $book,
        // 'comments' => $comments
      );
      $this->load->view('book_details', $data);
    }
  }
}
