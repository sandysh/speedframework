<?php
namespace App\ACL;
use Core\Session;
use App\Models\User;

class Permissions{

    public $user_id;
 
    function __construct()
    {
        $this->user_id = Session::get('user')['id'];
    }

    public function getRolesAndPermissions()
    {
        $user =  User::with('roles.permissions')->whereId($this->user_id)->first();
        return $user->roles;
    }

}