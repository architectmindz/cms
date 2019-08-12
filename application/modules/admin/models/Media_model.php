<?php
class Media_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    /**
     * This method fetches all media
     *
     * @return array
     */
    public function getAllMedia(){
        try{
            $results = array();
            
            $this->db->select('*');
            $this->db->from('media');
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
}