<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

	function dashboard()
	{
		$data['title'] = 'The Prediksi';
		$this->template->load('home/template', 'home/view_dashboard', $data);
	}

	function produk()
	{
		$data['title'] = 'Produk';
		$this->template->load('home/template', 'home/produk/view_produk', $data);
	}

	function klien()
	{
		$data['title'] = 'Klien';
		$this->template->load('home/template', 'home/klien/view_klien');
	}

	function artikel()
	{
		$data['title'] = 'Artikel';
		$this->template->load('home/template', 'home/artikel/view_artikel');
	}

	function visimisi()
	{
		$data['title'] = 'Visi dan Misi';
		$this->template->load('home/template', 'home/visimisi/view_visimisi');
	}

	function event()
	{
		$data['title'] = 'Event';
		$this->template->load('home/template', 'home/event/view_event');
	}

	function galery()
	{
		$data['title'] = 'Galery';
		$this->template->load('home/template', 'home/galery/view_galery');
	}

	function about()
	{
		$data['title'] = 'about';
		$this->template->load('home/template', 'home/about/view_about');
	}

	function profile()
	{
		$data['title'] = 'profile';
		$this->template->load('home/template', 'home/profile/view_profile');
	}

	function kontak()
	{
		$data['title'] = 'Kontak Kami';
		$this->template->load('home/template', 'home/kontak/view_kontak');
	}
	
}
