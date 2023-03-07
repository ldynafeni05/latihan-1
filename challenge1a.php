 <?php

 $merk_motor =" Honda vario 125cc 2020";

 if ($merk_motor == "yamaha mio 2019"){
    $predikat ="16.000.000";
 }else if ($merk_motor == "Yamaha jupiter MX 2014"){
    $predikat ="11.000.000";
 }else if ($merk_motor == "Honda vario 125cc 2020"){
    $predikat = "18.000.000";
 }else if ($merk_motor == "Honda supra 125 2015"){
    $predikat = "10.000.000";
 }else if ($merk_motor == "Honda PCX 150cc 2018"){
    $predikat = "23.000.000";
 } else {
    $predikat ="18.000.000";
 }

 echo  ("harga motor" .$merk_motor. " adalah $predikat");
 
 ?>
