<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index()
	{
		// Page Title
		$data['title'] = 'Supplier :: MyPos';
		$data['subtitle'] = 'Supplier';
		// $this->load->view('template');
		$this->template->load('template', 'supplier/supplier_data', $data);
	}
}
