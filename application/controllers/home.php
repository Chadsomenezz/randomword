<?php

class Home extends CI_Controller{
    
    public function index(){
        $this->load->library('session');
        $this->load->view("home");
    }
    public function process_rand()
    {
        $this->load->library('session');

        $data = array("randword"=> $this->generateRandomWord());
        $this->load->view('process_rand',$data);
    }

    protected function generateRandomWord(){
        $letters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $randword = "";
        shuffle($letters);
        
        for($i=0; $i<15;$i++){
            $randword .= $letters[$i];
        }

        return $randword;
        
    }
}