<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sign In FRK/FED';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->_login($email, $password);
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('dosen', ['dosen_email' => $email])->row_array();

        if ($user) {
            if ($user['dosen_aktifasi'] == 1) {
                if (password_verify($password, $user['dosen_password'])) {
                    $data = [
                        'NIDN' => $user['NIDN'],
                        'email' => $user['dosen_email'],
                        'role_id' => $user['dosen_roles']
                    ];
                    if ($user['dosen_profil'] == 'default.png') {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Please complete your Biodata. <br> <a href="' . base_url("dosen/") . 'view">Click here to Continue</a></div>');
                    }
                    $this->session->set_userdata($data);
                    if ($user['dosen_roles'] == 1) {
                        redirect('kaprodi');
                    } else if ($user['dosen_roles'] == 2) {
                        redirect('user');
                    } else if ($user['dosen_roles'] == 3) {
                        redirect('dashboard');
                    } else {
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="font-size:12px;">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="font-size:11px;">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" style="font-size:12px;">Email is not registered!</div>');
            redirect('auth');
        }
        var_dump($user);
        die;
    }

    public function registration()
    {
        $this->form_validation->set_rules('nidn', 'nidn', 'required|trim|is_unique[dosen.NIDN]', [
            'is_unique' => 'This NIDN has already registered!'
        ]);
        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('inputemail', 'Email', 'required|trim|valid_email|is_unique[dosen.dosen_email]');
        $this->form_validation->set_rules('inputpassword', 'Password', 'required|trim|min_length[6]|matches[repeatpassword]', [
            'is_unique' => 'This email has been used!'
        ]);
        $this->form_validation->set_rules('repeatpassword', 'Password', 'required|trim|matches[inputpassword]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sign Up FRK/FED';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'NIDN' => $this->input->post('nidn'),
                'dosen_instansi' => 1,
                'dosen_nama' => htmlspecialchars($this->input->post('fullname', true)),
                'dosen_email' => htmlspecialchars($this->input->post('inputemail', true)),
                'dosen_password' => password_hash($this->input->post('inputpassword'), PASSWORD_DEFAULT),
                'dosen_jeniskelamin' => '',
                'dosen_jabatanfungsional' => '',
                'dosen_hp' => '',
                'dosen_alamat' => '',
                'dosen_kodepos' => '',
                'dosen_s1prodi' => '',
                'dosen_s1pt' => '',
                'dosen_s1tahunlulus' => 0,
                'dosen_s2prodi' => '',
                'dosen_s2pt' => '',
                'dosen_s2tahunlulus' => 0,
                'dosen_s3prodi' => '',
                'dosen_s3pt' => '',
                'dosen_s3tahunlulus' => 0,
                'dosen_roles' => 2,
                'dosen_aktifasi' => 1,
                'dosen_profil' => 'default.png'
            ];
            $this->db->insert('dosen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! Your account has been Created. Please Sign In.</div>');
            redirect('auth');
        }
    }

    public function forgot_password()
    {

        $data['title'] = 'Forgot Password FRK/FED';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/forgot-password');
        $this->load->view('templates/auth_footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('NIDN');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out!</div>');
        redirect('auth');
    }
}
