<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductShop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('manager/book_manager');
        $this->load->model('manager/film_manager');
        $this->load->helper('url_helper');
    }

    public function menu()
    {
        $data['title'] = 'Menu page';


        $this->load->view('templates/header', $data);
        $this->load->view('/menu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function showBooks()
    {
        $data['title'] = 'All books';
        $books = $this->book_manager->getAllProducts();
        $data['books'] = $books;


        $this->load->view('templates/header', $data);
        $this->load->view('/booksBlog/allBooks', $data);
        $this->load->view('templates/footer', $data);
    }

    public function showBook($id)
    {
        $data['title'] = 'One book';
        $obj = New Book_model();
        $obj->setId($id);
        $book = $this->book_manager->getProductById($obj);
        $data['book'] = $book;


        $this->load->view('templates/header', $data);
        $this->load->view('/booksBlog/oneBook', $data);
        $this->load->view('templates/footer', $data);
    }

    public function addBook()
    {
        $data['title'] = 'New book';

        if (!empty($_POST)) {
            $addData = new Book_model();
            $addData->setName($this->input->POST('name'));
            $addData->setDescription($this->input->POST('description'));
            $addData->setPages($this->input->POST('pages'));
            $addData->setPrice($this->input->POST('price'));
            $id = $this->book_manager->addProduct($addData);

            redirect('/book/'.$id, 'refresh');
        }


        $this->load->view('templates/header', $data);
        $this->load->view('/booksBlog/addBook', $data);
        $this->load->view('templates/footer', $data);
    }

    public function deleteBook($id)
    {
        $delData = new Book_model();
        $delData->setId($id);
        $this->book_manager->deleteProduct($delData);
        redirect('/books/', 'refresh');
    }

    public function showFilms()
    {
        $data['title'] = 'All films';
        $films = $this->film_manager->getAllProducts();
        $data['films'] = $films;


        $this->load->view('templates/header', $data);
        $this->load->view('/filmsBlog/allFilms', $data);
        $this->load->view('templates/footer', $data);
    }

    public function showFilm($id)
    {
        $data['title'] = 'One film';
        $obj = New Film_model();
        $obj->setId($id);
        $film = $this->film_manager->getProductById($obj);
        $data['film'] = $film;


        $this->load->view('templates/header', $data);
        $this->load->view('/filmsBlog/oneFilm', $data);
        $this->load->view('templates/footer', $data);
    }

    public function addFilm()
    {
        $data['title'] = 'New film';

        if (!empty($_POST)) {
            $addData = new Film_model();
            $addData->setName($this->input->POST('name'));
            $addData->setDescription($this->input->POST('description'));
            $addData->setPrice($this->input->POST('price'));
            $id = $this->film_manager->addProduct($addData);

            redirect('/film/'.$id, 'refresh');
        }


        $this->load->view('templates/header', $data);
        $this->load->view('/filmsBlog/addFilm', $data);
        $this->load->view('templates/footer', $data);
    }

    public function deleteFilm($id)
    {
        $delData = new Film_model();
        $delData->setId($id);
        $this->film_manager->deleteProduct($delData);
        redirect('/films/', 'refresh');
    }

}