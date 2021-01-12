<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Category extends Model{
    public $timestamps = true;
    protected $filleable = ['name', 'slug'];
    protected $dates = ['created_at'];
}
