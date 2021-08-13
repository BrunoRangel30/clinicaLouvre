<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MelhorEnvioController extends Controller
{
    public function autorizacaoAPI(){

        $client_id = config('app.client_id');
        $service = $service;
        $url = config('app.urlME');
        $client_secret = config('app.client_secret');
        $redirect_uri = config('app.redirect_uri');
        $urlCurl = "$url/oauth/authorize?client_id=$client_id&redirect_uri=$redirect_uri&response_type=code&scope=$service";
        return redirect($urlCurl);
        
    }
    public function callback(){
        //adquiri um token
        return $access_token = json_decode($this->getAccessToken($_GET["code"]));
    
    }
}
