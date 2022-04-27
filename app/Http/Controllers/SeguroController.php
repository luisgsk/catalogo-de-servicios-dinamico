<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Display all the static pages when authenticated
     *
     * @param string $seguro
     * @return \Illuminate\View\View
     */
    public function index(string $seguro, Request $request)
    {
        if (view()->exists("seguros.{$seguro}.index")) {
            $cliente = $request->session()->get('cliente');
            $cliente = array_slice($cliente, 0);
            $session = $request->session()->get('session');
            session(['session_count' => 1]);
            return view("seguros.{$seguro}.index",compact('cliente','session'));
        }
        return abort(404);
    }

    public function seguroDesglose(string $seguro, string $subseguro, Request $request)
    {   
        $subseguro = $subseguro;
        if (view()->exists("seguros.{$seguro}.segurodesglose")) {
            $cliente = $request->session()->get('cliente');
            $cliente = array_slice($cliente, 0);
            $session = $request->session()->get('session');
            return view("seguros.{$seguro}.segurodesglose",compact('subseguro','cliente','session'));
        }
        return abort(404);
    }
}
