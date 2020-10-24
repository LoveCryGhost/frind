<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //欄位
    protected $fillable = [
        'name',
        'email',
        'tel',
        'others',
    ];


    //不能經由程式更改的欄位
    protected $hidden = [
        //'password',
        //'remember_token',
    ];

    //屬性變換
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];
}
