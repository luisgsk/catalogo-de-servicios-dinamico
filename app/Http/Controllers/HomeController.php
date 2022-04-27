<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cliente_id, Request $request)
    {   

        //return abort(404);
        $getdate = Carbon::now()->timezone('America/Santiago')->format('Ymd H:i:s');
        $sql_session = 'SET NOCOUNT ON ; exec SP_INSERT_SESSION_OMNI_RIMAC "' . $cliente_id . '","' . $getdate . '" ';
        $session = DB::select($sql_session);

        

        if($session[0]->session_id == "error"){

            return abort(404);// Si el cliente no Existe, retorno 404

        } else {

            $session_info = DB::select($sql_session);
            $cliente_info = Cliente::All()->where('id',$cliente_id)->toArray();
            session(['cliente' => $cliente_info]);
            session(['session' => $session_info]);
            $cliente = $request->session()->get('cliente');
            $cliente = array_slice($cliente, 0);
            $session = $request->session()->get('session');
            return view('pages.index',compact('cliente','session'));
            //print_r(array_slice($cliente, 0)); 

        }
    }

    public function redes($subseguro, Request $request){

        $cliente = $request->session()->get('cliente');
        $cliente = array_slice($cliente, 0);
        $session = $request->session()->get('session');
        return view('seguros.salud.redes',compact('cliente','session','subseguro'));

    }

    public function getCliente(){
        
    }

    public function trazabilidad() {

    }

}
