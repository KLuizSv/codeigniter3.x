<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class website extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

    function index($retorno = FALSE, $data = array())
    {
        redirect("/backend", "refresh");
    }
}