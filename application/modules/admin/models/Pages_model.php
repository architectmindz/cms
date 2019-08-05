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
    
    /**
    * This method insert page into database
    *
    * @return boolean
    */
    public function insertPage($data){
        try{
            return $this->db->insert('pages', $data);
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }

    /**
    * This method retrieves page
    *
    * @param $pageId integer
    *
    * @return array
    */
    public function getPageDetails($pageId){
        try{
            $results = array();

            $this->db->select('*');
            $this->db->from('pages');
            $this->db->where('page_id', $pageId);

            $query = $this->db->get();
            
            if($query->num_rows()){
                $results = $query->row_array();
            }
            
            return $results;
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }

    /**
    * This method updates page information
    *
    * @param $pageId integer
    *
    * @return boolean
    */
    public function updatePage($update, $pageId){
        try{
            $this->db->where('page_id', $pageId);
            return $this->db->update('pages', $update);
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }

    /**
    * This method deletes page information
    *
    * @param $pageId integer
    *
    * @return boolean
    */
    public function deletePage($pageId){
        try{
            $this->db->where('page_id', $pageId);
            return $this->db->delete('pages');
        }catch(\Exception $e){
            log_message('error', $e->getMessage());
        }
    }
}