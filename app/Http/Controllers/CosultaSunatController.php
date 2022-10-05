<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CosultaSunatController extends Controller
{
    public function buscarRuc(Request $request)
    {
        try{
            if ($request->ajax()) {
                $ruc=$request->get('ruc');
                $ruta = "https://ruc.com.pe/api/beta/ruc";
                $token = "f2cafb86-8a9a-4110-8fa3-cae95e1d6da9-a88ca54a-1b04-4bb0-9daf-4b61c80455be";

                $rucaconsultar = $ruc;
                $data = array(
                    "token" => $token,
                    "ruc"   => $rucaconsultar
                );

                $data_json = json_encode($data);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $ruta);
                curl_setopt(
                    $ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    )
                );
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $respuesta  = curl_exec($ch);
                curl_close($ch);

                $leer_respuesta = json_decode($respuesta, true);
                $data=array('entidad' => $leer_respuesta);
                echo json_encode($data);
            }
        }catch (\Exception $e) {
        return back()->with('success', 'Hubo un error al consultar SUNAT, intente de nuevo!');
        }
    }

}
