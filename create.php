<?php
//error reporting code 
error_reporting(0);

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//changing for post method 
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function.php');


$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == 'POST'){

  //inside the inputdata the make and show any datas 
  $inputData = json_decode(file_get_contents("php://input"), true);
  if(empty($inputData)){
    

//to add customer with POST method 
    $storeCustomer = storeCustomer($_POST);

  }else {


  $storeCustomer = storeCustomer($inputData);
 
  }
  echo $storeCustomer;

}

//from read.php
else
{

  $data = [
    'status' => 405,
    'message' => $requestMethod. 'Method Not Allowed',

  ];
  header("HTTP/1.0 405 Method Not Allowed");
  echo json_encode($data);

}


?>