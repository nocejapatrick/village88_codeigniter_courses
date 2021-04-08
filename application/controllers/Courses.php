<?php

class Courses extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('form','url'));
        $this->load->model('Course_model');
    }

    public function index(){
        $this->load->view('_partials/header');
    
        $this->load->view('courses',array('courses'=>$this->Course_model->get()));
        $this->load->view('_partials/footer');
    }

    public function add(){
        $this->form_validation->set_rules($this->set_rules());

        if($this->form_validation->run() === FALSE){

            $errors =  $this->form_validation->error_array();
            foreach($errors as $key=>$value){
                $this->session->set_flashdata($key.'_error',$value);
            }

            redirect(base_url());
            
        }else{
            $this->Course_model->insert($this->input->post());
            $this->session->set_flashdata('success',"Course added successfully!");
            redirect(base_url());
            // $this->session->flashdata('')
        }
    }

    public function destroy($id){
        $this->load->view('_partials/header');
        $this->load->view('delete_course',['course'=>$this->Course_model->find($id)]);
        $this->load->view('_partials/footer');
    }

    public function delete(){
        $this->Course_model->delete($this->input->post('id'));
        redirect(base_url());
    }

    public function set_rules(){
        return array(
            array(
                'field'=>'name',
                'label'=>'Name',
                'rules'=>"required|min_length[5]",
                'errors'=> array(
                    'required'=>'%s should be required',
                    'min_length'=>'%s length should be above 5 characters'
                )
            )
        );
    }
}