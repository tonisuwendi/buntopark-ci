<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $data['title'] = 'BUNTO PARK - Apartement Mewah alias Mepet Sawah';
        $data['css'] = 'style';
        $this->load->view('index', $data);
    }

}