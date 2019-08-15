<?php

class Menu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (! $this->session->userdata('loggedin')) {
            redirect('admin/authorize/logout');
        }
    }
    
    public function menuSettings(){
        
    }
}