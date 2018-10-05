<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
  public function Consultar(){
    return User::where('name', '=', 'javier garcia')->orderBy('name','desc')->get();
  }

  public function getEmpleado(Request $id){
      $empleado = User::where('id','=',$id)->first();

      return $empleado;
  }
}
