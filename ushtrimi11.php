<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $file1="ushtrimi1.txt";
    $open1=fopen($file1,"w");
    $teksti="hello database";
    fwrite($open1,$teksti);
    fclose($open1);
    
    $file2="./filet/ushtrimi1.txt";
    $open2=fopen($file2,"w");
    $teksti1="hello from lipjan";
    fwrite($open2,$teksti1);
    fclose($open2);

    $open3=fopen($file2,"w");
    $teksti2="helo from prishtina";
    fwrite($open3,$teksti2);
    fclose($open3);

    $file3="./filet/ushtrimi2.txt";
    $open4=fopen($file3,"a");
    $teksti3="hello from kosova";
    fwrite($open4,$teksti3);
    fclose($open4);

    $open5=fopen($file3,"a");
    $teksti4="hello from USA/n";
    fwrite($open5,$teksti4);
    fclose($open5);

    $open6=fopen($file3,"w");
    $teksti5="hello from advin";
    fwrite($open6,$teksti5);
    fclose($open6);

    $file4="./filet/ush3.txt";
    $open7=fopen($file4,"r");
    $lexo=fread($open7,fileSize($file4));
    echo $lexo;
    fclose($open7);

    $open8=fopen($file3,"r");
    $lexo2=fread($open8,fileSize($file3));
    echo "<h1>numri i karaktereve eshte: ".strlen($lexo2)."dhe fjalia eshte: $lexo2</h1>";
    fclose($open8);

  
    ?>
</body>
</html>