<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nombre = 'Nicole';

        return view('index')
        ->with('nombre', $nombre);
    }

    public function detalle(){
        $nombre = 'Nicole';
        $apellido = 'Sutton';
        $tel = '55 7602 8008';
        $email = 'nicole_98st@hotmail.com';

        return view('detalle')
        ->with('nombre', $nombre)
        ->with('apellido', $apellido)
        ->with('tel', $tel)
        ->with('email', $email);
    }    
}   
