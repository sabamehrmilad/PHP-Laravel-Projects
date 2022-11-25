<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class sms extends Model
{
    use HasFactory,Notifiable;
    protected $table='sms';
    protected $guarded=[];
    public $timestamps = false;

}
