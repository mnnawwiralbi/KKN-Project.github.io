<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\Database;

class Database extends Controller
{
  function home(){
  
  return view('Pages.Home');

  }

  function Calender(){
  
  return view('Pages.Calender');

  }

  function Contacs(){
  
  return view('Pages.Contacs');

  }

  function Profile(){
  
  return view('Pages.Profile');

  }

  function Dashboard(){
  
  return view('Pages.Dashboard');

  }
  
  

}
