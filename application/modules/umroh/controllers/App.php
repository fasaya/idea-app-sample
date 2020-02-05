<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('template');
    }

    public function index()
    {
        $data['title'] = "Beranda";
        template('home', $data);
    }

    public function paket()
    {
        $data['title'] = "Paket Umroh";
        template('paket_umroh', $data);
    }

    public function detailpaket()
    {
        $data['title'] = "Detail Paket Umroh";
        template('detail_paket', $data);
    }
}
