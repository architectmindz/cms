<?php

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (! $this->session->userdata('loggedin')) {
            redirect('admin/authorize/logout');
        }
    }

    public function index()
    {
        try {
            $info = array();
            $info['menuItem'] = 'dashboard';
            $info['pageTitle'] = 'Admin Dashboard - Al Ain Holdings';
            
            // Templates
            $this->load->view('common/header', $info);
            $this->load->view('common/sidebar', $info);
            $this->load->view('dashboard');
            $this->load->view('common/footer');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
        }
    }
}