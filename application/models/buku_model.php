<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	function get_buku()
	{		
		return $this->db->get('data_buku');
	}
}
