<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

     function __construct()
     {
          parent:: __construct();
          $this->load->model('blog_m','m');
     }

    public function index()
	{
	    $data['blogs'] = $this->m->getBlog();
        $this->load->view('blog/header');
		$this->load->view('blog/index', $data);
        $this->load->view('blog/footer');
	}

    public function add()
    {

        $this->load->view('blog/header');
        $this->load->view('blog/add');
        $this->load->view('blog/footer');
    }
     public function  submit(){
         $result = $this->m->submit();
         if($result){
             $this->session->set_flashdata('success_msg','Send successfully');
         }else{
              $this->session->set_flashdata('error_msg','Faill To Send Record');
         }
         redirect('blog');
     }

     public function edit($id){
         $data['blog'] = $this->m->getBlogById($id);
         $this->load->view('blog/header');
         $this->load->view('blog/edit', $data);
         $this->load->view('blog/footer');
     }

     public  function  update(){
         $result = $this->m->update();
         if($result){
             $this->session->set_flashdata('success_msg','Update successfully');
         }else{
             $this->session->set_flashdata('error_msg','Faill To Send Record');
         }
         redirect('blog');
     }

    public  function  delete($id){
        $result = $this->m->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg','Delete successfully');
        }else{
            $this->session->set_flashdata('error_msg','Faill To Send Record');
        }
        redirect('blog');
    }


    public function about()
    {

        $this->load->view('blog/header');
        $this->load->view('blog/about');
        $this->load->view('blog/footer');
    }
}
