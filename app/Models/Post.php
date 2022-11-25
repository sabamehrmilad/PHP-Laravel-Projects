<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @method static find($id)
 */
class Post extends Model
{
    use HasFactory,Notifiable;
    protected $table='posts';
    protected $guarded=[];
    public $timestamps = false;



}
