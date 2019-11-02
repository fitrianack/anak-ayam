<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan HTML dan PHP</title>
    <style>
        /*untuk menampilkan angka genap yang berwarna biru*/
        .genap{
            color : blue;
        }
        /*untuk menampilkan angka genap yang berwarna oranye*/
        .ganjil{
            color : orange;
        }
    </style>
</head>
<body>
    <?php

    /*menampilkan tulisan tekotekotek anak ayam turun 8 */
    echo 'Tekotekotek anak ayam turun '.$anak_ayam=8;

    /*untuk menampilkan urutan angka yang decrement yang dimulai dari angka 8 sampai 0*/
    for($anak_ayam=8; $anak_ayam>=0;$anak_ayam--){

        /*sebuah decision apabila angka ganjil, maka akan memanggil class "ganjil" yang akan
        menampilkan output oranye*/
        if($anak_ayam%2==1){
            echo '<p class="ganjil"> Anak ayam sisa '.$anak_ayam.'</p>';
        }
        /*sebuah decision apabila angka 0, maka akan menampilkan "Anak ayamnya habis T_T hikss" */
        else if($anak_ayam==0){
            echo '<p class="genap"> Anak ayamnya habis T_T hikss </p>';
        }
        /*sebuah decision apabila angka genap, maka akan memanggil class "ganjil" yang akan
        menampilkan output biru*/
        else{
            echo '<p class="genap"> Anak ayam sisa '.$anak_ayam.'</p>';
        }
    }
    
    ?>
</body>
</html>