<?php
//Access-Control-Allow-Origin where we allow everything 
header('Access-Control-Allow-Origin:*');
//the data what send from back-end, the going to send in json application format only 
header('Content-Type: application/json');
//thats means read.php file succesfuly only with GET method
header('Access-Control-Allow-Method: GET');
//headers part content type access control, allow headers, autorization, x-reguest-with(support to input)
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

//fetch one row data from MySql Database:
if($requestMethod == "GET"){

  if(isset($_GET['id'])){

    $customer = getCustomer($_GET);
    echo  $customer;


    //make a customer list 
  }else{
    $customerList = getCustomerList();
    echo $customerList;

  }

  $customerList = getCustomerList();
  echo $customerList;
}
else
{

//that error 405 means any other methods not allowed(only GET method allow)
  $data = [
    'status' => 405,
    'message' => $requestMethod. ' Method Not Allowed',
//send from data 
  ];
  header("HTTP/1.0 405 Method Not Allowed");
  echo json_encode($data);


}


?>