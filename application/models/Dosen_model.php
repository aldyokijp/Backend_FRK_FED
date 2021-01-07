<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Dosen_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get dosen by NIDN
     */
    function get_dosen($NIDN)
    {
        return $this->db->get_where('dosen', 'NIDN' == $NIDN)->row_array();
    }

    /*
     * Get all dosen count
     */
    function get_all_dosen_count()
    {
        $this->db->from('dosen');
        return $this->db->count_all_results();
    }

    /*
     * Get all dosen
     */
    function get_all_dosen($params = array())
    {
        $this->db->order_by('NIDN', 'desc');
        if (isset($params) && !empty($params)) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('dosen')->result_array();
    }

    /*
     * function to add new dosen
     */
    function add_dosen($params)
    {
        $this->db->insert('dosen', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update dosen
     */
    function update_dosen($NIDN, $params)
    {
        $this->db->where('NIDN', $NIDN);
        return $this->db->update('dosen', $params);
    }

    /*
     * function to delete dosen
     */
    function delete_dosen($NIDN)
    {
        return $this->db->delete('dosen', array('NIDN' => $NIDN));
    }
}