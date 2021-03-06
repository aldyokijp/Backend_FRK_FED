<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fakultas_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get fakultas by fakultas_kode
     */
    function get_fakultas($fakultas_kode)
    {
        return $this->db->get_where('fakultas',array('fakultas_kode'=>$fakultas_kode))->row_array();
    }
    
    /*
     * Get all fakultas count
     */
    function get_all_fakultas_count()
    {
        $this->db->from('fakultas');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all fakultas
     */
    function get_all_fakultas($params = array())
    {
        $this->db->order_by('fakultas_kode', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('fakultas')->result_array();
    }
        
    /*
     * function to add new fakultas
     */
    function add_fakultas($params)
    {
        $this->db->insert('fakultas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fakultas
     */
    function update_fakultas($fakultas_kode,$params)
    {
        $this->db->where('fakultas_kode',$fakultas_kode);
        return $this->db->update('fakultas',$params);
    }
    
    /*
     * function to delete fakultas
     */
    function delete_fakultas($fakultas_kode)
    {
        return $this->db->delete('fakultas',array('fakultas_kode'=>$fakultas_kode));
    }
}