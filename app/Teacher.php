<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Teacher extends Model
{
  
    protected $fillable = [
        'name', 'email', 'phone_no', 'class_id', 'password', 'created_at', 'updated_at'
    ];
}