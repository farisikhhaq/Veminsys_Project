<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPage extends Model
{
    protected $table = "user_pages";
    protected $primarykey = "nosim";
    protected $fillable = ['id','nosim','nama','tgllahir' ,'alamat'];

}