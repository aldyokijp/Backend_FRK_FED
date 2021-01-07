<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Frkfed_instansi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get frkfed_instansi by instansi_id
     */
    function get_frkfed_instansi($instansi_id)
    {
        return $this->db->get_where('frkfed_instansi',array('instansi_id'=>$instansi_id))->row_array();
    }
    
    /*
     * Get all frkfed_instansi count
     */
    function get_all_frkfed_instansi_count()
    {
        $this->db->from('frkfed_instansi');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all frkfed_instansi
     */
    function get_all_frkfed_instansi($params = array())
    {
        $this->db->order_by('instansi_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('frkfed_instansi')->result_array();
    }
        
    /*
     * function to add new frkfed_instansi
     */
    function add_frkfed_instansi($params)
    {
        $this->db->insert('frkfed_instansi',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update frkfed_instansi
     */
    function update_frkfed_instansi($instansi_id,$params)
    {
        $this->db->where('instansi_id',$instansi_id);
        return $this->db->update('frkfed_instansi',$params);
    }
    
    /*
     * function to delete frkfed_instansi
     */
    function delete_frkfed_instansi($instansi_id)
    {
        return $this->db->delete('frkfed_instansi',array('instansi_id'=>$instansi_id));
    }
}
