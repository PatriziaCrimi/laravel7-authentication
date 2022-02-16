<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyer;

class Product extends Model
{
  protected $table = 'products';

  protected $fillable = ['name', 'price', 'description', 'availability'];

  public function buyer() {
    return $this->belongsTo('App\Buyer');
  }
}
