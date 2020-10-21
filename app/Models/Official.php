<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Official extends Model
{
    use HasFactory, Notifiable;

    protected $fillable=[
        'id',
        'email',
        'password',
        'phone',
        'address',
        'profession',
        'position',
        'password'

    ];

        /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
