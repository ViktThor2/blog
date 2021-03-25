<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function customer()  {
      return $this->belongsTo(Customer::class);
    }

    public function tags()  {
      return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
