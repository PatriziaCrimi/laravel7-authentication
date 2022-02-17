<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class InfoUser extends Model
{
  protected $table = 'info_users';

  protected $fillable = ['telephone','mobile','address', 'postal_code', 'city', 'country', 'user_id'];

  public function user() {
    return $this->belongsTo('App\User');
  }
}
