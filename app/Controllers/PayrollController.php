<?php
namespace App\Controllers;
use Core\Controller;
/**
*
*/
class PayrollController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('admin.payroll.index');
    }

}


