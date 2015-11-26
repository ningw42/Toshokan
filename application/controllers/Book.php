<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

  public function lend()
  {

  }

  public function ret()
  {

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
      $this->load->model('Book');
      $book = Book::findByIds($id);
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
