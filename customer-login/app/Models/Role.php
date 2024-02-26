<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name',
        'role_id'
    ];

    public function registerProfile()
    {
        return $this->belongsTo(RegisterProfile::class, 'role');
    }
}
