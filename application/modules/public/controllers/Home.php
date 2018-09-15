<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->data = [
			'title' => 'This is home page'
		];

		$this->load->view('home_page', $this->data);
	}

}

/* End of file Home.php */
/* Location: ./application/modules/public/controllers/Home.php */