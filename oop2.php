   <?php
    include 'class-kendaraan.php';

   $kereta1 = new keretaApi ('KA Lokomotif',15000000);
   $kereta1->setGerbong(20);
   echo 'Jumlah gerbong dari '.$kereta1->bacaMerek().'yang seharga '.$kereta1->bacaHarga().'adalah '.$kereta1->bacaGerbong();
   ?>
