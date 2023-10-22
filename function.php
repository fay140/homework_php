<?php
function add ($x,$y){
    return $x + $y;
   
}
echo add(15,10);
echo add(5,10);


function Hello($x){
    $user =$x
    if($user == "fay"){
        echo "Hello $user";
    }else{
    echo " bye $user";
    }   
}
Hello("sami");
echo "<br>";
Hello("fay");

?>