<?php

class Template extends FE_Controller{
    public function index(){
        $this->load->view('design_1');
    }
    public function portal(){
        $this->load->view('design_2');
    }
}
