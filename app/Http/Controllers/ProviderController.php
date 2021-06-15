<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
  public function index() {
    $provider = Provider::all();
    return view('provider.list', compact('provider'));
  }

    public function create() {

        return view('provider.create');
    }

    public function store(Request $request) {
      Provider::create([
        'name' => $request->name,
        'address' => $request->address
      ]);
      return back();
    }
}
