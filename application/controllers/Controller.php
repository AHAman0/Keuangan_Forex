<?php

class Controller extends CI_Controller {
    public function index() {
        // Important to remember to Load the URL Helper for the base_url() function to work
        $this->load->helper('url');

        // Load the views in main directory inside views folder
        $this->load->view('Main/index');
        $this->load->view('Main/Body');
        $this->load->view('Main/Footer');
    }
}