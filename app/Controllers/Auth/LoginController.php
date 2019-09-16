<?php
use App\Controllers\Controller;
/**
* 
*/
class LoginController extends Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->helper('data');
    }

    public function index()
    {
        $this->load->view('auth.login');
    }
}


