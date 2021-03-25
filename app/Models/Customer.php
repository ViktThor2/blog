<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    public function setData($data)
    {
      $this->name     =  $data['name'];
      $this->email    =  $data['email'];

      if(isset($data['password']) && $data['password']) {
        $this->password = \Hash::make($data['password']);
      }
    }

    public function notes()  {
      return $this->hasMany(Note::Class);
    }

}
