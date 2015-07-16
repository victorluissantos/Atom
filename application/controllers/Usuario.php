<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['titulo'] = "Login !";
	}

	public function index()
	{
		$this->data['mensagem'] = "Login de acesso !";

		if( isset($_POST) )
		{
			var_dump($_POST);
		}

		$this->load->view('login', $this->data);
	}

	public function home()
	{
		$this->load->view('login');
	}

	public function verifica_login()
	{
		$this->load->view('login');
	}

	public function logar()
	{
		var_dump($_POST);
		die('8743');
	}
}
