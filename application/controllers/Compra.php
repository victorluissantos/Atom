<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['titulo'] = "Finalizar Compra !";
	}

	public function index()
	{
		$this->load->view('compra');
	}
}
