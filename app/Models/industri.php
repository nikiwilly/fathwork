<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industri extends Model
{
    protected $table = 'industri';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'email', 'password', 'status_akun'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
