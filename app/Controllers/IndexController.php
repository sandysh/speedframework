<?php
use Core\Controller;
use Core\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
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
        // $user = User::all();
        $data = [
        'title'=> "index page",
        'body' => "Welcome to Speed framework",
        ];

        // return_response($data);
//        $this->load->view('index',$data);
        return view('index',$data);
    }
    
    public function postData()
    {
        dd(Request::all());
    }
}


