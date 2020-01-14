<?php
namespace App\Controllers;
use Core\Controller;
/**
*
*/
class ReportsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('reports.index');
    }

}


