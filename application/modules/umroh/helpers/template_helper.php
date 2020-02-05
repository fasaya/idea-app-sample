<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('template')) {
    function template($view, $main = [])
    {
        $ci = &get_instance();

        if (isset($main['title'])) {
            $header['title'] = " | " . $main['title'];
        } else {
            $header['title'] = "";
        }

        $ci->load->view('v_header', $header);
        $ci->load->view($view, $main);
        $ci->load->view('v_footer');
    }
}
