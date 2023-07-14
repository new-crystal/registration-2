<?php
defined('BASEPATH') or exit('No direct script access allowed');
require __DIR__ . '/../../vendor/autoload.php';

class OnSite extends CI_Controller
{
    private $sheets;
    private $data;

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Seoul');
    }

    public function index()
    {

        $this->load->view('header');
        $this->load->view('on-site', $this->data);
        $this->load->view('footer');
    }

    public function mobile()
    {
        $this->load->view('on-site-mo', $this->data);
    }

    public function success()
    {
        $this->load->view('success', $this->data);
    }
}