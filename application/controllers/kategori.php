<?php 

class kategori extends CI_Controller{
	public function hoodiepria()
	{
		$data['hoodiepria'] = $this->model_kategori->data_hoodiepria()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('hoodiepria', $data);
		$this->load->view('templates/footer');
	}

	public function hoodiewanita()
	{
		$data['hoodiewanita'] = $this->model_kategori->data_hoodiewanita()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('hoodiewanita', $data);
		$this->load->view('templates/footer');
	}
}