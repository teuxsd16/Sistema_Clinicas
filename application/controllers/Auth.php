<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
  	parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
  }

	public function login()
	{
		$rules = array(
			array(
				'field' => 'username',
				'label' => 'Nome de Usuário',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'password',
				'label' => 'Senha',
				'rules' => 'trim|required'
			)
		);
		$this->form_validation->set_rules($rules);

		if ($this->input->method(true) == 'POST') {
			$this->load->model('user_model');
			if ($this->form_validation->run() == true && $this->user_model->checkLogin($this->input->post())) {
				redirect('/admin');
			} else {
				$data['error_message'] = 'Dados incorretos';
			}
		}

		$data['action'] = 'login';
		$this->load->view('app/login', $data);

	}

	public function register()
	{
		$rules = array(
			array(
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'tel',
				'label' => 'Telefone',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => 'trim|required'
			)
		);
		$this->form_validation->set_rules($rules);
		if ($this->input->method(true) == 'POST') {
			$this->load->model('user_model');
			$data1 = array(
				'username' 					=> $this->input->post('nome'),
				'senha'							=> md5($this->input->post('senha')),
				'user_group_id'			=> $this->input->post('tipo'),
			);
			if ($this->form_validation->run() == true && $this->user_model->Inserir($data1)) {
				$data['success_message'] = 'Usuário cadastrado com sucesso!';
			} else {
				$data['error_message'] = 'Dados incorretos';
			}
		}
		$data['action'] = 'register';
		$this->load->view('app/login', $data);
	}
}
