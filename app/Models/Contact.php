<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $filable=[
        'name',
        'email',
        'subject',
        'message'
    ];
}
