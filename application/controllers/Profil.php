<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		$this->pustaka->auth($this->session->level, [1, 2, 3]);
	}

	function index() {
		$data['user'] = $this->db->get_where('user', ['id' => $this->session->id])->row();
		if ($data['user']->prodi_id != null) {
			$data['addon']['prodi'] = $this->db->get_where('prodi', ['id' => $data['user']->prodi_id])->row()->nama;
		}
		$this->twig->display('profil/index.twig', $data);
	}

	function aksi_ubah() {
		$fav = $_FILES['foto'];
		if ($fav['size'] != 0) {
			move_uploaded_file($fav['tmp_name'], 'uploads/userimage/temp/' . $this->session->id);

			$image = new \Gumlet\ImageResize('uploads/userimage/temp/' . $this->session->id);
			$image->crop(64, 64);
			$image->save('uploads/userimage/' . $this->session->id);

			unlink('uploads/userimage/temp/' . $this->session->id);
		}

		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('user', $data, $where);

		$this->session->set_userdata('nama', $data['nama']);

		redirect(base_url());
	}

	function aksi_ubah_password() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = hash('sha512', $value);
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('user', $data, $where);

		redirect(base_url());
	}

}