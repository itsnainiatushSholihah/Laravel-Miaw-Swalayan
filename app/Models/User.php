<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticalable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticalable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

   protected $hideden =[
        'password',
        'remember_token',
   ];

   protected $casts = [
        'email_verified_at'=>'datetime',
        'password'=>'hashed',
   ];

   public function transaction() {
     return $this->hasMany(transaction::class, 'id_user', 'id');
 }
}
