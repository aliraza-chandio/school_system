<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Student extends Model
{
  
    protected $fillable = [
        'name', 'dob', 'address', 'phone_no', 'country_id', 'city_id', 'status', 'created_at', 'updated_at'
	];
}