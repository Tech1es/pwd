<?php 
require "function.php";

$id_buku = $_GET["id"];
if (buku_satu_jumlah($id_buku) < 1) {
    echo "<script>
    location='../buku.php';
    </script>";
} else {
    $hapus = q("DELETE FROM buku WHERE id = '$id_buku'");
    if ($hapus) {
        echo "
        <script>
        aler('Data Berhasil dihapus!')
        location='../buku.php'
        </script>
        ";
    } else {
        echo "
        <script>
        aler('Data Gagal dihapus!')
        location='../buku.php'
        </script>
        ";
    }
}