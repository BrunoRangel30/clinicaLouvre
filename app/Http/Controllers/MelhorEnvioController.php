<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MelhorEnvioController extends Controller
{
    public function autorizacaoAPI(){

        $client_id = config('app.client_id');
       // $service = purchases-read ;
        $url = config('app.urlME');
        $client_secret = config('app.client_secret');
        $redirect_uri = config('app.redirect_uri');
        $urlCurl = "$url/oauth/authorize?client_id=$client_id&redirect_uri=$redirect_uri&response_type=code&scope= shipping-tracking shipping-print shipping-preview shipping-generate shipping-checkout cart-read cart-write orders-read shipping-calculate shipping-cancel";
        return redirect($urlCurl);
        
    }
    public function callback(){
        //adquiri um token
      //  dd($_GET["code"]);
        if(isset($_GET["code"])){
            $result['codigo'] = $_GET["code"];
            $result['status'] = 'OK';
            return json_encode($result);
        }else{
            $result['codigo'] = null;
            $result['status'] = 'Código não encontrado';
            return json_encode($result);
           
        }
    
    }
}
