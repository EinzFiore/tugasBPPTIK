<?php 

    echo ' ============== CETAK BILANGAN GANJIL DAN GENAP ============== <br>';
    // membuat varibel $i dengan nilai 1, looping menggunakan for 
    // dan jika $i < 100 maka nilai $i akan bertambah hingga statement ke 2 bernilai true;
    for($i = 1; $i<=100; $i++){
        //jika hasil sisa bagi nilai $i sama dengan 0 (yang artinya nilai i sama dengan genap)
        if($i % 2 == 0){
            // jika true, cetak variabel $i dan kalimat ket
            echo $i . ' adalah bilangan genap <br>';
            //jika false
        } else echo $i . ' adalah bilangan ganjil <br>';
    }
?>