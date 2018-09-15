<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Another_page extends CI_Controller {

	public function index() {
		$this->data = [
			'title' => 'Another Page'
		];

		$this->load->view('another_page', $this->data);
	}

}

/* End of file Another_page.php */
/* Location: ./application/modules/control_panel/controllers/Another_page.php */