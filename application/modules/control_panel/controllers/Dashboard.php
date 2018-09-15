<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->data = [
			'title' => 'Dashboard'
		];

		$this->load->view('dashboard', $this->data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/modules/control_panel/controllers/Dashboard.php */