<?php defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/overview");
    }
}
