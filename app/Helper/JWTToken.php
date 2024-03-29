<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{

    public static function CreateToken($userEmail, $userID){
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'Token_Module_12',
            'iat' => time(),
            'exp' => time()+60*10,
            'userEmail' => $userEmail,
            'userID'=>$userID
        ];
        return JWT::encode($payload,$key,'HS256');
    }

    public static function ReadToken($token){
        try {
            if($token==null){
                return 'unauthorized';
            }
            else{
                $key =env('JWT_KEY');
                $decode=JWT::decode($token,new Key($key,'HS256'));
                return $decode;
            }
        }
        catch (Exception $e){
            return 'unauthorized';
        }
    }
}






