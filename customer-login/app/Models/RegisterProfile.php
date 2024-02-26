<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class RegisterProfile extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $table = 'register_profile';  

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone_number', 
        'password', 
        'role'
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'role_name');
    }

    
}
