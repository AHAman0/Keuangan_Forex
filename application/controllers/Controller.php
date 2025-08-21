<?php

class Controller extends CI_Controller {
    public function __construct() {
        // for loading session from library codeigniter
        parent::__construct();
        $this->load->model('Models'); // load Models files
        $this->load->library('session');
    }

    public function index($id = null) {
        $this->load->database();
        // Important to remember to Load the URL Helper for the base_url() function to work
        $this->load->helper('url');

        if ($id !== null) {
            $data['account'] = $this->ModelTable->getID($id);
        } else if ($this->session->userdata('user_id')) {
            $data['account'] = $this->ModelTable->getID($this->session->userdata('user_id'));
        } else {
            $data['account'] = null;
        }

        // Load the views in main directory inside views folder
        $this->load->view('Main/index', $data);
        $this->load->view('Main/Body');
        $this->load->view('Main/Footer');
    }

    public function Changelogs () {
        $this->load->helper('url');

        // Path to your CHANGELOG.md file
        $file = FCPATH . 'CHANGELOG.md';

       $logs = [];

       // Make sure your CodeIgniter project is in a Git repository
       if (is_dir(FCPATH . '.git')) {
            // Pull the last 50 commits with full body
            exec('git log -n 50 --pretty=format:"---%an|%ad---%n%s%n%b" --date=short', $raw_logs);

            foreach ($raw_logs as $raw) {
                // Separate the body and author/date info
                if (preg_match('/^.*\n.*\n---(.*)\|(.*)---\n(.*)\n(.*)$/s', $raw, $matches)) {
                    $logs[] = [
                        'author'  => trim($matches[1]),
                        'date'    => trim($matches[2]),
                        'message' => trim($matches[3]),
                        'body'    => trim($matches[4]),
                        ];
                } else {
                // Fallback if no body
                    $logs[] = [
                        'author' => '',
                        'date'    => '',
                        'message'  => $raw,
                        'body'    => '',
                    ];
                }
            }
        }
        
        $data['logs'] = $logs;
        
        $this->load->view('Main/index');
        $this->load->view('Changelogs', $data);
        $this->load->view('Main/Footer');
    }

    // Important to remember to create file .htaccess for freedom from index.php
    public function Login() {
        $this->load->helper('url', 'form');
        // Important to load form validation from Construct, So it can be sent into real database which is phpmyadmin 
        $this->load->library('form_validation');
        // Data represent as data account
        $data = [];
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run() === TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $user = $this->Models->getByUsername($username);
                
                if ($user && password_verify($password, $user['password'])) {
                $role = ($user['role'] === 'admin') ? 'admin' : 'user';

                $this->session->set_userdata([
                    'logged_in' => TRUE,
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $role
                ]);
                } else {
                    $data['error'] = 'Invalid username or password';
                }
            }
        }
        // If want to use the same layout as frontpage use this
        // If no put index to the view then Head is no there and that means, no bootstrap and popper.js loaded
        $this->load->view('Main/index');
        $this->load->view('Login');
        $this->load->view('Main/Footer');
    }
}