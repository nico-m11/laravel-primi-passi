<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DischiController extends Controller
{
    public function index() {
      $str_json = file_get_contents('D:\Users\Utente\Desktop\Boolean\Esercizi\laravel-primi-passi\storage\app\mock\dischi.json');
      $data = json_decode($str_json);

      return view('dischi', compact('data'));
    }
}
