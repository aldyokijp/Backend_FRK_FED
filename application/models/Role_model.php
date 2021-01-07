<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Role_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get role by roles_id
     */
    function get_role($roles_id)
    {
        return $this->db->get_where('roles',array('roles_id'=>$roles_id))->row_array();
    }
    
    /*
     * Get all roles count
     */
    function get_all_roles_count()
    {
        $this->db->from('roles');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all roles
     */
    function get_all_roles($params = array())
    {
        $this->db->order_by('roles_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('roles')->result_array();
    }
        
    /*
     * function to add new role
     */
    function add_role($params)
    {
        $this->db->insert('roles',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update role
     */
    function update_role($roles_id,$params)
    {
        $this->db->where('roles_id',$roles_id);
        return $this->db->update('roles',$params);
    }
    
    /*
     * function to delete role
     */
    function delete_role($roles_id)
    {
        return $this->db->delete('roles',array('roles_id'=>$roles_id));
    }
}
