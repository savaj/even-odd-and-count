<?php 
$myarray = array(3,4,5,6,7,8,9);
$even_array = array();
$odd_array = array();
for($i=0; $i<count($myarray); $i++){
  if($myarray[$i]%2 == 0){
      array_push($odd_array,$myarray[$i]);
    }else{
      array_push($even_array,$myarray[$i]);
    }
   
}
print_r($even_array);
print_r($odd_array);
echo "even".count($even_array)."odd".count($odd_array);
?>
