<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Frk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Frk_model');
    } 

    /*
     * Listing of frk
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('frk/index?');
        $config['total_rows'] = $this->Frk_model->get_all_frk_count();
        $this->pagination->initialize($config);

        $data['frk'] = $this->Frk_model->get_all_frk($params);
        
        $data['_view'] = 'frk/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new frk
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'frk_jenis' => $this->input->post('frk_jenis'),
				'frk_status' => $this->input->post('frk_status'),
				'frk_dosen' => $this->input->post('frk_dosen'),
				'frk_date' => $this->input->post('frk_date'),
				'frk_ak' => $this->input->post('frk_ak'),
				'frk_kual' => $this->input->post('frk_kual'),
				'frk_kuan' => $this->input->post('frk_kuan'),
				'frk_waktu' => $this->input->post('frk_waktu'),
				'frk_tahun' => $this->input->post('frk_tahun'),
				'frk_semester' => $this->input->post('frk_semester'),
            );
            
            $frk_id = $this->Frk_model->add_frk($params);
            redirect('frk/index');
        }
        else
        {
			$this->load->model('Frkfed_jenis_model');
			$data['all_frkfed_jenis'] = $this->Frkfed_jenis_model->get_all_frkfed_jenis();
            
            $data['_view'] = 'frk/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a frk
     */
    function edit($frk_id)
    {   
        // check if the frk exists before trying to edit it
        $data['frk'] = $this->Frk_model->get_frk($frk_id);
        
        if(isset($data['frk']['frk_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'frk_jenis' => $this->input->post('frk_jenis'),
					'frk_status' => $this->input->post('frk_status'),
					'frk_dosen' => $this->input->post('frk_dosen'),
					'frk_date' => $this->input->post('frk_date'),
					'frk_ak' => $this->input->post('frk_ak'),
					'frk_kual' => $this->input->post('frk_kual'),
					'frk_kuan' => $this->input->post('frk_kuan'),
					'frk_waktu' => $this->input->post('frk_waktu'),
					'frk_tahun' => $this->input->post('frk_tahun'),
					'frk_semester' => $this->input->post('frk_semester'),
                );

                $this->Frk_model->update_frk($frk_id,$params);            
                redirect('frk/index');
            }
            else
            {
				$this->load->model('Frkfed_jenis_model');
				$data['all_frkfed_jenis'] = $this->Frkfed_jenis_model->get_all_frkfed_jenis();

                $data['_view'] = 'frk/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The frk you are trying to edit does not exist.');
    } 

    /*
     * Deleting frk
     */
    function remove($frk_id)
    {
        $frk = $this->Frk_model->get_frk($frk_id);

        // check if the frk exists before trying to delete it
        if(isset($frk['frk_id']))
        {
            $this->Frk_model->delete_frk($frk_id);
            redirect('frk/index');
        }
        else
            show_error('The frk you are trying to delete does not exist.');
    }
    
}