<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recado;

class RecadoController extends Controller
{
    public function index()
    {
        $recados = Recado::latest()->get();
        return view('recados', ['recados' => $recados]);
    }

    public function store(Request $request)

    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'message' => 'required|string',
        ]);
        Recado::create($validatedData);
        return redirect('/');
    }
}
