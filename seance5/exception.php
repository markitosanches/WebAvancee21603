<?php


function divide($dividend, $divisor){
  if($divisor == 0){
      throw new Exception("Diviser par Zero", 4575458);
  }
  return $dividend/$divisor;

}

try{
    echo divide(15, 0);
} catch(Exception $e){
    //var_dump($e);
    echo $e->getMessage();
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getLine();
}finally{
    echo "<br>complete";
}

