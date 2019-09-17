<?php
use Core\Controller;
use Core\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class IndexController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = [
            'title'=> 'site title',
        ];

//        $this->load->view('index',$data);
        return view('index',$data);
    }
    
    public function tour()
    {
        return view('tour');
    }
}


