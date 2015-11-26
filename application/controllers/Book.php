<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

  public function lend()
  {

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
