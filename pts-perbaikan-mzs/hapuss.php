<?php
require 'functions.php';

$Id = $_GET["id"];


if ( hapus($Id) >= 0) {
    echo "
    <script>
    alert ('data berhasil dihapus');
    document.location.href = 'tabel.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert ('data gagal dihapus');
    document.location.href = 'tabel.php';
    </script>
    ";
}

?>
