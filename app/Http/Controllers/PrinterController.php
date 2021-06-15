<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Printer;
use App\Models\Provider;

class PrinterController extends Controller
{
    public function index() {
        $provider = Provider::all();
        return view('create', compact('provider'));
    }

    public function store(Request $request) {
        printer::create([
            'name' => $request->printer_name,
            'provider_id' => $request->provider_id,
            'print_res' => $request->print_res,
            'price' => $request->price
        ]);
        return redirect('/printer');
    }

   public function listPrinter() {
       $printers = printer::all();
       return view('list', compact('printers'));
   }

   public function edit($id) {
    $printer = Printer::findOrFail($id);
    return view('edit', compact('printer'));
}

    public function update($id, Request $request) {
    Printer::findOrFail($id)->update([
        'name' => $request->phone_name,
        'print_res' => $request->print_res,
        'price' => $request->price
    ]);
    return redirect('/printer');
}

 public function delete($id) {
     Printer::destroy($id);
     return back();
 }

}
