<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['isi'] = "Ini BACKEND";
        $this->load->view('all', $data);
    }

    // public function index()
    // {
    //     $data['title'] = "Beranda";
    //     template('home', $data);
    // }
}
