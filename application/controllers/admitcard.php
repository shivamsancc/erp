<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*-------------------------------------------------------------------Add-Admit-card----------------------------*/
	public function add_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/add_admit',$data);
	}
	/*-------------------------------------------------------------------Delete_admit----------------------------*/
		public function delete_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Delete_admit',$data);
	}
	/*-------------------------------------------------------------------edit_admit----------------------------*/
	public function edit_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Edit_admit',$data);
	}
	
	/*-------------------------------------------------------------------search_Admit-card----------------------------*/
	public function search_admit()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_Admit',$data);
	}

	/*-------------------------------------------------------------------search_student----------------------------*/
	public function search_student()
	{
		$data['marquee']=$this->search_student->getdata();
		$data['student_registration']=$this->search_student->getdata();
		


		$this->load->view('admin/Search_student',$data);
	}

}




















	
