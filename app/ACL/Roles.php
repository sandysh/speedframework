<?php
namespace App\ACL;
use Core\Session;
use App\Models\Role;

class Roles{

    public $user_id;
 
    function __construct()
    {
        $this->user_id = Session::get('user')['id'];
    }

    public function getRoles()
    {
        $roles = Role::where('user_id',$user_id)->get();
        return $roles;
    }

}