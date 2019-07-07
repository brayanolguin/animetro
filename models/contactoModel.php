<?php

include 'models/class/redessociales.php';
include 'models/class/sucursales.php';

class ContactoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getRedSocial(){
        $redessociales = [];
        $redessociales = getRedesSociales($this->db->connect2());
        return $redessociales;
    }

    public function getSucursal(){
        $sucursales = [];
        $sucursales = getSucurales($this->db->connect2(),$this->db->connect());
        return $sucursales;
    }

    public function sendEmail($datos){
        require_once './libs/PHPMailer.php';
        require_once './libs/SMTP.php';
        
        $mail=new PHPMailer();
        $mail->CharSet = 'UTF-8';

        $body = 'Cuerpo del correo de prueba';

        $mail->IsSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->Username   = 'brayan.olguin.bernal@gmail.com';
        $mail->Password   = 'gaffgarion1988';
        $mail->SetFrom($datos['correo'], $datos['nombre']);
        $mail->AddReplyTo($datos['correo'], $datos['nombre']);
        $mail->Subject    = $datos['msj'];
        $mail->MsgHTML($body);

        $mail->AddAddress('gaffgarionsnf@gmail.com', 'Brayan');
        $mail->send();
        return true;
    }
}

?>