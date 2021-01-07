<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Notifikasi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get notifikasi by notif_id
     */
    function get_notifikasi($notif_id)
    {
        return $this->db->get_where('notifikasi',array('notif_id'=>$notif_id))->row_array();
    }
    
    /*
     * Get all notifikasi count
     */
    function get_all_notifikasi_count()
    {
        $this->db->from('notifikasi');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all notifikasi
     */
    function get_all_notifikasi($params = array())
    {
        $this->db->order_by('notif_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('notifikasi')->result_array();
    }
        
    /*
     * function to add new notifikasi
     */
    function add_notifikasi($params)
    {
        $this->db->insert('notifikasi',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update notifikasi
     */
    function update_notifikasi($notif_id,$params)
    {
        $this->db->where('notif_id',$notif_id);
        return $this->db->update('notifikasi',$params);
    }
    
    /*
     * function to delete notifikasi
     */
    function delete_notifikasi($notif_id)
    {
        return $this->db->delete('notifikasi',array('notif_id'=>$notif_id));
    }
}
