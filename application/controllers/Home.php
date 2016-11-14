<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
    $this->load->view('header'); // Header part of HTML file (to load bootstrap)
		$this->load->view('home');
    $this->load->view('footer'); // Footer part of the HTML file
	}
}
