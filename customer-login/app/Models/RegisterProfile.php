<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterProfile extends Model
{
    use HasFactory;
    protected $table = 'register_profile';

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email_id', 
        'phone_number', 
        'password', 
        'role_id_fk'
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id_fk');
    }

    
}
