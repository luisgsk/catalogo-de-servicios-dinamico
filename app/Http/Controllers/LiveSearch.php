<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class LiveSearch extends Controller
{
    function index(Request $request)
    {
        $cliente = $request->session()->get('cliente');
        $cliente = array_slice($cliente, 0);
        $session = $request->session()->get('session');
        return view('pages.busqueda', compact('cliente', 'session'));
    }

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            $valor = $request->get('valor');
            $seguro_id = $request->get('seguroid');
            /*if ($query != '') {
                $data = FacadesDB::table('omni_rimac_redes')
                    //->join('role_user', 'users.id', '=', 'role_user.user_id')
                    //->join('roles', 'role_user.role_id', '=', 'roles.id')
                    ->select('region','clinica','red')
                    //->where('region', 'like', '%' . $query . '%')
                    ->where('red', $query)
                    //->orWhere('users.email', 'like', '%' . $query . '%')
                    ->orderBy('region', 'desc')
                    ->get();
            } else {
                $data = FacadesDB::table('omni_rimac_redes')
                    ->select('region','clinica','red')
                    ->where('region', 'lima')
                    ->orderBy('red', 'asc')
                    ->get();
                //->paginate(5);
            }*/

            switch ($query) {

                case "region":

                    $data = FacadesDB::table('omni_rimac_redes')
                        ->select('region')
                        ->distinct()
                        //->where('region', 'like', '%' . $query . '%')
                        //->where('red', $query)
                        //->orWhere('users.email', 'like', '%' . $query . '%')
                        ->orderBy('region', 'asc')
                        ->get();

                    break;
                case "clinica":

                    $data = FacadesDB::table('omni_rimac_redes')
                        ->select('clinica')
                        ->distinct()
                        //->where('region', 'like', '%' . $query . '%')
                        //->where('red', $query)
                        //->orWhere('users.email', 'like', '%' . $query . '%')
                        ->orderBy('clinica', 'asc')
                        ->get();

                    break;
                case "red":

                    $data = FacadesDB::table('omni_rimac_redes')
                        ->select('red')
                        ->distinct()
                        //->where('region', 'like', '%' . $query . '%')
                        //->where('red', $query)
                        //->orWhere('users.email', 'like', '%' . $query . '%')
                        ->orderBy('red', 'asc')
                        ->get();

                    break;

                case "regionmodal":

                    $data = FacadesDB::table('omni_rimac_redes')
                        ->select('clinica', 'red')
                        //->distinct()
                        ->where('region', $valor)
                        ->where('seguro_id', $seguro_id)
                        //->orWhere('users.email', 'like', '%' . $query . '%')
                        ->orderBy('red', 'asc')
                        ->get();

                    break;

                case "clinicamodal":

                    $data = FacadesDB::table('omni_rimac_redes')
                        ->select('region', 'red')
                        ->distinct()
                        ->where('clinica', $valor)
                        //->where('red', $query)
                        //->orWhere('users.email', 'like', '%' . $query . '%')
                        ->orderBy('red', 'asc')
                        ->get();

                    break;

                case "redmodal":

                    $data = FacadesDB::table('omni_rimac_redes')
                        ->select('region', 'clinica')
                        ->distinct()
                        ->where('red', $valor)
                        //->where('red', $query)
                        //->orWhere('users.email', 'like', '%' . $query . '%')
                        ->orderBy('region', 'asc')
                        ->get();

                    break;
            }

            $total_row = $data->count();

            if ($total_row > 0) {

                /*switch($query){
                    case "regionmodal":
                        $output .= '
                            <thead style="width:100% !important;">
                            <tr>
                            <th ><b>Clínica</b></th>
                            <th ></b>Red</b></th>
                            </tr>
                            </thead>';
                            $output .= '<tbody>';
                    break;
                    case "clinicamodal":
                        $output .= '
                            <thead style="width:100% !important;">
                            <tr>
                            <th ><b>Región</b></th>
                            <th ></b>Red</b></th>
                            </tr>
                            </thead>';
                            $output .= '<tbody>';
                    break;
                    case "redmodal":
                        $output .= '
                            <thead style="width:100% !important;">
                            <tr>
                            <th ><b>Región</b></th>
                            <th ></b>Clínica</b></th>
                            </tr>
                            </thead>';
                            $output .= '<tbody>';
                    break;
                }*/

                foreach ($data as $row) {
                    //$date = \Carbon\Carbon::parse($row->created_at);
                    switch ($query) {
                        case "region":
                            $querymodal = "'regionmodal'";
                            $valormodal = "'$row->region'";
                            $output .= '<tr>';
                            $output .= '<td><a href="#" onclick="showmodal(' . $querymodal . ', '.$valormodal .' )">' . $row->region . '</a></td>';
                            $output .= '</tr>';
                            break;

                        case "clinica":
                            $queryclinica = "'clinicamodal'";
                            $valormodal = "'$row->clinica'";
                            $output .= '<tr>';
                            $output .= '<td><a href="#" onclick="showmodal(' . $queryclinica . ', '.$valormodal .')">' . $row->clinica . '</a></td>';
                            $output .= '</tr>';
                            break;
                        case "red":
                            $queryred = "'redmodal'";
                            $valormodal = "'$row->red'";
                            $output .= '<tr>';
                            $output .= '<td><a href="#" onclick="showmodal(' . $queryred . ', '.$valormodal .')">' . $row->red . '</a></td>';
                            $output .= '</tr>';
                            break;

                        case "regionmodal":
                            $output .= '<tr class="trmodal">';
                            $output .= '<td style="text-align:left !important;">' . $row->clinica . '</td>';
                            $output .= '<td style="text-align:left !important;">' . str_replace('Red ', '', $row->red) . '</td>';
                            $output .= '</tr>';


                            break;

                        case "clinicamodal":
                            $output .= '<tr class="trmodal">';
                            $output .= '<td style="text-align:left !important;">' . $row->region . '</td>';
                            $output .= '<td style="text-align:left !important;">' . str_replace('Red ', '', $row->red) . '</td>';
                            $output .= '</tr>';
                            break;

                        case "redmodal":
                            $output .= '<tr class="trmodal">';
                            $output .= '<td style="text-align:left !important;">' . $row->region . '</td>';
                            $output .= '<td style="text-align:left !important;">' . $row->clinica . '</td>';
                            $output .= '</tr>';
                            break;
                    } //end swith
                } //end foreach
            } else {
                $output = '
       <tr>
        <td align="center" colspan="6" class="table-info" ><b>No se encontraron resultados</b></td>
       </tr>
       <script>$("#searchindex").hide();</script>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
