<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        check_not_login();
        $this->load->model('user_m');
        $data['row'] = $this->user_m->get();

		$this->template->load('template', 'user/user_data', $data);
    }
    
    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            echo "proses data simpan baru";
        }

        
    }
}
