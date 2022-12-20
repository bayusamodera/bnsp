<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	function signin()
	{
		$data['title'] = 'Sign In';
		$this->template->load('login/template', 'login/signin/login');
	}

	function signup()
	{
		$data['title'] = 'Sign Up';
		$this->template->load('login/template', 'login/signup/signup');
	}
	
}
