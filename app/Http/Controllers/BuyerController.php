<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;

class BuyerController extends Controller
{
  public function index()
  {
    $data = [
      'buyers' => Buyer::all()
    ];
    return view('guest.buyers.index', $data);
  }

  public function show($id)
  {
    $buyer = Buyer::find($id);
    if($buyer) {
      return view('guest.buyers.show', compact('buyer'));
    } else {
      abort(404);
    }
  }
}
