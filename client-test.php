<?php
  /* $value= $_GET['number'];
   $value2=$_GET['number2'];*/
    ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
    $client = new SoapClient("http://localhost/phpservice/sum.wsdl");
    $return = $client->getSum(12,12);
    print_r($return);
?>