<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemain extends CI_Controller {

	public function index($idKlub)
	{
		$this->load->model('klub_model');		
		$data["pemain_list"] = $this->klub_model->getPemainByKlub($idKlub);
		$this->load->view('pemain', $data);
	}

	public function create($idKlub)
	{
		
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Pemain','trim|required');
		$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->load->model('klub_model');	
		$data["pemain_list"] = $this->klub_model->getPemainByKlub($idKlub);
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambah_pemain_view',$data);
		}else{
			$this->klub_model->insertPemain($idKlub);
			redirect('pemain/index/'.$this->uri->segment(3));
		}
	}

	public function update()
	{
		
	}

	public function delete()
	{
		
	}
}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>