<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @method static attempt(array $user_data)
 */
class admin extends Model
{
    use HasFactory,Notifiable;
    protected $table='users';
    protected $guarded=[];
    public $timestamps = false;

}
