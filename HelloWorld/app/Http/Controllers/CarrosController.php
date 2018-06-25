<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Carro;

class CarrosController extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function create()
    {
        return View('create');
    }

    public function store()
    {

        $carros = new Carro;
        $carros->marca = Input::get('marca');
        $carros->modelo = Input::get('modelo');
        $carros->ano = Input::get('ano');
        $carros->save();

        return Redirect::to('show');
        
    }

    public function show()
    {
        // get all the nerds
        $carros = Carro::all();

        // carrega a view e passa os carros
        return View('show')->with('carros', $carros);
    }

}
