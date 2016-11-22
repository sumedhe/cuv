<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->view('header'); // Header part of HTML file (loading bootstrap)
        $this->load->view('banner');
        $this->load->view('navbar');
        $this->load->view('description');
        $this->load->view('mission-vision');
        $this->load->view('committee');
        $this->load->view('gallery');
        $this->load->view('join-us');
        $this->load->view('contact-us');
        $this->load->view('map');
        $this->load->view('footer'); // Footer part of the HTML file
	}
}
