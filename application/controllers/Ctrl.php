<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl extends CI_Controller {

	function __construct(){
		parent :: __construct();
		$this->load->helper('url');
	}
	
	function index(){
		echo "Ctrl controller"; die;
	}
	
	
}
