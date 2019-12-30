<?php
 
namespace App\Models;
use Core\Database;
use \Illuminate\Database\Eloquent\Model;
 
class User extends Model {
     
    protected $table = 'users';

    protected $hidden = [
        'password'
    ];

    protected $fillable = [
        'username', 'password', 'email','first_name','last_name','status'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
 
?>