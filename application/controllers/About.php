<?php

    class About extends MY_Controller
    {

    public function index()
    {
       
        $this->load->view('about/about');
        $this->load->view('templates/footer1');
       
    }
    }