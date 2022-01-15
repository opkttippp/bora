<?php


//use api\object\Mail;
use App\Controller\MailController;

//include_once '../object/Mail.php';
require "../../../vendor/autoload.php";



$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$prodId = $obj['formData'] ?? 'Hello!!';


Mail::send($prodId);

    echo json_encode([$prodId]);
