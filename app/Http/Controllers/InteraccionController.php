<?php

namespace App\Http\Controllers;

use App\Models\Interaccion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InteraccionController extends Controller
{
    public static function setInteraccion($accion, $seguro, $subseguro, $desglose, $seccion, Request $request)
  {
    //$sql = 'SET NOCOUNT ON ; exec SP_GET_TRAZABILIZAD_OMNI_FUXION "'.$session_id.'", "'.$accion.'", "'.$producto.'","'.$familia.'" ';
    //return DB::select($sql);
    $session = $request->session()->get('session');
    Interaccion::create([
      'session_id' => $session[0]->session_id,
      'accion' => $accion,
      'seguro' => $seguro,
      'subseguro' => $subseguro,
      'desglose' => $desglose,
      'seccion' => $seccion,
      'created' => Carbon::now()->timezone('America/Santiago')->format('Ymd H:i:s')
    ]);

  } //end setLog()
}
