var nama = "Selamat Datang! 환영합니다!";
alert(nama);

function hapusdialog(hapus) {
  if (confirm("Apakah data ini akan dihapus?!")) {
    document.location(hapus);
  }
}
