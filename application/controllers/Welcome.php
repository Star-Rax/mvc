<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('home');

	}
	public function index()
	{

		$arr['data']=$this->home->page('home');
		$this->load->view('header');
		$this->load->view('page',$arr);

		$this->load->view('test1',$arr);
		
		$this->load->view('footer');
	}
	public function about()
	{
		
		$arr['data']=$this->home->page('about');
		$this->load->view('header');
		$this->load->view('page',$arr);
		$this->load->view('test1',$arr);
		$this->load->view('footer');
	}
	public function contact()
	{
		
		$arr['data']=$this->home->page('contact');
		$this->load->view('header');
		$this->load->view('page',$arr,$arr2);
		$this->load->view('test1',$arr);
		$this->load->view('footer');
	}
}
