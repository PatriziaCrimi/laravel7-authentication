<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Buyer extends Model
{
  protected $table = 'buyers';

  protected $fillable = ['name', 'surname', 'telephone','mobile','address', 'postal_code', 'city', 'country'];

  public function products() {
    return $this->hasMany('App\Product');
  }
}
