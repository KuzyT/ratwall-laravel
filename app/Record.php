<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
  // Пользователь
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}