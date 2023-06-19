<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Pertemuan 4</title>
</head>
<body>
    <?php  
    $nama = "Bale";
    $prodi = "Sistem Informasi";
    ?>
    <p>
        <!--Perbedaan yang terlihat dibawah itu sebenarnya fungsinya sama, cuman di line kedua lebih ringkas aja-->
        Nama saya adalah <?php echo $nama ?>, Saya Mahasiswa Prodi <?php echo $prodi ?><br>
        Nama saya adalah <?= $nama ?>, Saya Mahasiswa Prodi <?= $prodi ?><br>
        <!--Line ketiga ini untuk menggabungkan dua variabel yang udah dibuat diatas plus menambahkan spasi diantara kedua variabel-->
        Nama saya adalah <?= $nama ." & ". $prodi ?>, Saya Mahasiswa Prodi <?= $prodi ?>
    </p>

    <!--
    Buatlah 2 variabel baru, dengan isi dari tiap variabel adalah angka yang berbeda.
    
    Buatlah perhitungan aritmatika (tambah, kali, kurang, bagi) dari kedua variabel tersebut-->
    <?php 
    $angka1 = 74;
    $angka4 = 86;
    ?>
    <p>
        Hasil Penambahan dari <?= $angka1 ." + ". $angka4 ?> = <?= $angka1 + $angka4 ?><br>
        Hasil Perkalian dari <?= $angka1 ." x ". $angka4 ?> = <?= $angka1 * $angka4 ?><br>
        Hasil Pengurangan dari <?= $angka1 ." - ". $angka4 ?> = <?= $angka1 - $angka4 ?><br>
        Hasil Pembagian dari <?= $angka1 ." : ". $angka4 ?> = <?= $angka1 / $angka4 ?>
    </p>

    <!--Perbedaan Variabel dengan fungsi, kalo fungsi dibuat sekali tapi bisa dipanggil berkali kali pake command return
        Kalo variabel dibuat sekali berfungsi nya sekali, kalo mau panggil variabel itu lagi ya buat lagi-->
    <h1><?= nilai1() ?></h1>
    <?php
    function nilai1(){
        return 714;
    } ?>

    <?php
    
    // D besar buat inputkan hari misal hari ini senin jadi Mon, kalo d kecil buat jadi tanggal
    // M besar buat inputkan nama bulan sekarang misal bulan 5 adalah Mei jadi May, kalo m kecil buat jadi angka dari bulan itu
    // Y besar buat tahun full kayak 2023, y kecil buat 2 digit terakhir tahun tersebut
    $today = date("d/M/Y, H:i:s") //
    ?>
    <p>
        Hari ini tanggal <?= $today ?>
    </p>

    <!-- Buatlah perhitungan rumus luas segitiga -->
    <?php
    $alas = 12;
    $tinggi = 15;
    ?>
    
    <p>
        Rumus dari luas segitiga X = <br>
        = 1/2 x alas x tinggi<br>
        = 1/2 x <?= $alas ." x ". $tinggi ?><br>
        = 1/2 x <?= $alas * $tinggi ?><br>
        = <?= $alas * $tinggi / 2 ?><br>
    </p>
</body>
</html>