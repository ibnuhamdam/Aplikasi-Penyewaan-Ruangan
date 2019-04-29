<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->view('index');
    }
	public function index()
	{
		$this->load->view('index');
    }
    public function detail()
    {
        $this->load->view('detail-ruangan');
    }
}
