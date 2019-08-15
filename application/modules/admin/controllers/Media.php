<?php
class Media extends CI_Controller{
    function __construct(){
        parent::__construct();
        
        if (! $this->session->userdata('loggedin')) {
            redirect('admin/logout');
        }
        
        $this->load->model('media_model');
    }
    
    /**
     * Default action displaying all media items
     */
    public function index(){
        try{
            // Declarations
            $info = array();
            $info['menuItem'] = 'media';
            $info['pageTitle'] = 'CMS Media';
            
            // Fetch list of available media
            $data['media'] = $this->media_model->getAllMedia();
            
            // Templates
            $this->load->view('common/header', $info);
            $this->load->view('common/sidebar', $info);
            $this->load->view('media/media', $data);
            $this->load->view('common/footer');            
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
}