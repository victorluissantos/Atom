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
		try{

			$this->data['mensagem'] = "Login de acesso !";

			if( !empty($_POST)  && isset($_POST) )
			{	
				$this->verifica_login($_POST);
			}
			$this->load->view('login', $this->data);
		} catch (Exception $e) {

			$this->data['error'] = $e->getMessage().'Código do erro: '.$e->getCode();

		}

	}

	public function home()
	{
		$this->load->view('login');
	}

	public function verifica_login($data)
	{
		try{
			$this->load->model('usuarios');
			$usuario = new Usuarios();

			$this->usuarios = $usuario->get_all();

			var_dump($this->usuarios);

			die('chegou');
		} catch (Exception $e) {

			throw new Exception($e->getMessages(), "#101");

		}
	}

}
