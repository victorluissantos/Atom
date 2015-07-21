<?php
class Usuarios extends CI_MODEL{

	private $table_name = 'usuarios';

	public $nome; //VARCHAR( 90 )
	public $login; //VARCHAR( 120 )
	public $senha; //VARCHAR( 250 )
	public $status; //Boolean

    function __construct()
    {
        parent::__construct();
    }
    
    function get_all()
    {
        $query = $this->db->get( $this->getTable_name() );
        return $query->result();
    }

    function getTable_name(){
    	return $this->table_name;
    }

}