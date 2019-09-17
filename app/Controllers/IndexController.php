<?php
use Core\Controller;
use Core\Request;
use App\Models\Post;
use App\Models\Menu;
use App\Models\Setting;
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
        $posts = Post::all();
        $menus = Menu::all();
        $title = Setting::where('option','title')->first();
        $tagline = Setting::where('option','tagline')->first();
        $data = [
            'title'=> $title->value,
            'body' => "Welcome to Speed framework",
            'posts' => $posts,
            'menus' => $menus,
            'tagline' => $tagline->value
        ];

//        $this->load->view('index',$data);
        return view('index',$data);
    }
    
    public function tour()
    {
        return view('tour');
    }
}


