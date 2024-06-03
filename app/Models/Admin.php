<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\AdminsRole;


class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        "mobile",
        'status'
    ];

    protected $hidden = [
        'password',
    ];

    public function adminRoles(){
        return $this->hasMany(AdminsRole::class,"subadmin_id");
    }
}



