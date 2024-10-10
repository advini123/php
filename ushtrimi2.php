<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a1=rand(1,20);
    $a2=rand(1,20);

    if($a1<$a2){
        echo "numri i par eshte me i vogel se numri i dyt";
    }
     elseif($a1==$a2){
        echo "numrat jan te barabart";
     }
     else{
        echo "numri i par eshte me i madh se numri i dyt";
     }

          echo "<hr>";


     $randomi=rand(-20,20);
     switch($randomi){
        case $randomi<0: echo "numri $randomi eshte negativ";
        break;
        case $randomi>0: echo "numri  $randomi eshte pozitiv";
        break;
        default: echo "numri eshte 0";
        break;
     }
           echo "<hr>";


    $temp=rand(10,30);
    switch($temp){
        case $tem<18: echo "<p style='color:blue'>dhoma eshte e ftohte</p>";
        break;
        case $tem<=24: echo "<p style='color:blue'>dhoma eshte e normale</p>";
        break;
        case $tem<24: echo "<p style='color:blue'>dhoma eshte e nxehtr</p>";
        break;
    }       
            echo "<hr>";


    $username="shkolladigjitale123";
    $passwoed="shkolladigjitale";
    
    if($username=="shkolladigjitale123" and $passwoed=="shkolladigjitale"){
        echo "kalon";
    }
    else{
        echo "nuk kalon";
    }

            echo "<hr>";


$produktet=rand(1,700);
if($produktet<100){
    echo "duhet te prodhohen produkte te reja";
}
elseif($produktet<500){
    echo "numri i produktit eshte i mjaftushem ";
}
else{
    echo "te ndalet prodhimi i produkteve";
}
        
            echo "<hr>";  
            
        
$piket=rand(0,100);
switch($piket){
case $piket<=49: echo"ju keni $piket pike dhe nota juaj eshte 5";
break; 
case $piket<=59: echo"ju keni $piket pike dhe nota juaj eshte 6";
break;
case $piket<=69: echo"ju keni $piket pike dhe nota juaj eshte 7";
break;
case $piket<=79: echo"ju keni $piket pike dhe nota juaj eshte 8";
break;
case $piket<=89: echo"ju keni $piket pike dhe nota juaj eshte 9";
break;
case $piket<=100: echo"ju keni $piket pike dhe nota juaj eshte 10";
break;         
}  

            echo "<hr>";
    
    
$a=22;
if($a<40) $b="vlera a variables eshtye me e vogel se 40";
echo $b;
 
        echo "<hr>";
    
$c=49;
$d=$c<50?"numri me i vogel se 50":"numri i barabart ose me i madhe se 50";
echo $d;

        echo "<hr>";

        
    ?>
</body>
</html>