<?php

error_reporting(0);

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

//using the PUT METHOD 
header('Access-Control-Allow-Method: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function.php');


$requestMethod = $_SERVER["REQUEST_METHOD"];

//the request method PUT 
if($requestMethod == 'PUT'){


$inputData = json_decode(file_get_contents("php://input"), true);
//if(empty($inputData)){

//$updateCustomer = updateCustomer($_POST, $_GET);
//}

//else{

  $updateCustomer = updateCustomer($inputData, $_GET);
//}
//we not store from this update thats why its is updateCustomer
  echo $updateCustomer;
}
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