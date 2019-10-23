<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			$data['main_view'] = 'dashboard_view';
			$this->load->view('template', $data);	
		}
		else{
			redirect('login');
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */