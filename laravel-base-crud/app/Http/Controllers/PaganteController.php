<?php

namespace App\Http\Controllers;
use App\Pagante;
use Illuminate\Http\Request;

class PaganteController extends Controller
{
    $paganti = Pagante::all();
    return view("paganti", compact("paganti"));
}
