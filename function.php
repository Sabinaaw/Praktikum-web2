<?php
// buat fungsi
function hitungUmur($thn_lahir){
    // code fungsi
    $thn_sekarang = 2024;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // tampilkan umur 
    //echo $umur;

    //kembalukan umur
    return $umur;
}

// pamggil fumgsi
echo "Umur saya adalah " . hitungUmur(2005);

?>
