<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Matakuliah extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Matakuliah_model');
    } 

    /*
     * Listing of matakuliah
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('matakuliah/index?');
        $config['total_rows'] = $this->Matakuliah_model->get_all_matakuliah_count();
        $this->pagination->initialize($config);

        $data['matakuliah'] = $this->Matakuliah_model->get_all_matakuliah($params);
        
        $data['_view'] = 'matakuliah/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new matakuliah
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('matakuliah_nama','Matakuliah Nama','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'matakuliah_nama' => $this->input->post('matakuliah_nama'),
            );
            
            $matakuliah_id = $this->Matakuliah_model->add_matakuliah($params);
            redirect('matakuliah/index');
        }
        else
        {            
            $data['_view'] = 'matakuliah/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a matakuliah
     */
    function edit($matakuliah_id)
    {   
        // check if the matakuliah exists before trying to edit it
        $data['matakuliah'] = $this->Matakuliah_model->get_matakuliah($matakuliah_id);
        
        if(isset($data['matakuliah']['matakuliah_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('matakuliah_nama','Matakuliah Nama','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'matakuliah_nama' => $this->input->post('matakuliah_nama'),
                );

                $this->Matakuliah_model->update_matakuliah($matakuliah_id,$params);            
                redirect('matakuliah/index');
            }
            else
            {
                $data['_view'] = 'matakuliah/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The matakuliah you are trying to edit does not exist.');
    } 

    /*
     * Deleting matakuliah
     */
    function remove($matakuliah_id)
    {
        $matakuliah = $this->Matakuliah_model->get_matakuliah($matakuliah_id);

        // check if the matakuliah exists before trying to delete it
        if(isset($matakuliah['matakuliah_id']))
        {
            $this->Matakuliah_model->delete_matakuliah($matakuliah_id);
            redirect('matakuliah/index');
        }
        else
            show_error('The matakuliah you are trying to delete does not exist.');
    }
    
}
