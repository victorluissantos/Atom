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
				if( $this->verifica_login($_POST) )
				{
					$this->load->view('usuario', $this->data);
				}else{
					$this->load->view('login', $this->data);
				}
			}else{
				$this->load->view('login', $this->data);
			}
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
			foreach ($this->usuarios as $key => $value)
			{
				if($value->login == $data['username'] && $value->senha == md5($data['senha']) )
					return true;
			}
			return false;

		} catch (Exception $e) {
			throw new Exception($e->getMessages(), "#201");
		}
	}

}
