<?php
class Pages_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    /**
     * This method fetches all pages
     * 
     * @return array
     */
    public function getAllPages(){
        try{
            $results = array();
            
            $this->db->select('*');
            $this->db->from('pages');
            $this->db->order_by('created_at', 'DESC');
            $query = $this->db->get();
            
            if($query->num_rows()){
                $results = $query->result_array();
            }
            
            return $results;
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
    
    public function insertPage($data){
        try{
            return $this->db->insert('pages', $data);
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
}