<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  protected $connection = 'mysql';
 protected $collection = '_school';
 protected $fillable = ['s_name','s_dob','s_fname','s_mname','s_caste','s_aadhar','s_phone','s_address','s_gender'];
}
