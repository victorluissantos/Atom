<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['titulo'] = "Carrinho de Compra !";
	}

	public function index()
	{
		$this->load->view('carro');
	}

	public function teste()
	{
		die('8754678');
		$this->load->view('carro');
	}
}
