<?php
session_start();

if (isset($_GET['kategori'])) {
    $_SESSION['kategori'] = $_GET['kategori'];
    header("Location: index.php#categories");
    exit;
}

if (isset($_GET['close'])) {
    unset($_SESSION['kategori']);
    header("Location: index.php#categories");
    exit;
}

$showPopup = false;
$title = "";
$content = "";

if (isset($_SESSION['kategori'])) {
    $showPopup = true;
    $k = $_SESSION['kategori'];

    if ($k == "plastik") {
        $title = "Sampah Plastik";
        $content = "
        Jenis: Botol minum, kantong plastik, kemasan makanan<br><br>
        Cara Daur Ulang:<br>
        - Cuci bersih dari sisa makanan/minuman<br>
        - Lepas label jika memungkinkan<br>
        - Keringkan sebelum disetor<br><br>
        Tips:<br>
        Jangan campur plastik kotor karena bisa menurunkan nilai daur ulang.
        ";
    }

    if ($k == "kertas") {
        $title = "Sampah Kertas";
        $content = "
        Jenis: Kertas HVS, kardus, koran<br><br>
        Cara Daur Ulang:<br>
        - Pastikan kering<br>
        - Lipat atau ikat rapi<br>
        - Pisahkan dari kertas berminyak<br><br>
        Tips:<br>
        Kertas yang bersih punya nilai jual lebih tinggi.
        ";
    }

    if ($k == "logam") {
        $title = "Sampah Logam";
        $content = "
        Jenis: Kaleng minuman, besi, aluminium<br><br>
        Cara Daur Ulang:<br>
        - Bersihkan dari sisa isi<br>
        - Pipihkan jika bisa<br><br>
        Tips:<br>
        Logam termasuk sampah dengan nilai tinggi 💰
        ";
    }

    if ($k == "kaca") {
        $title = "Sampah Kaca";
        $content = "
        Jenis: Botol kaca, toples<br><br>
        Cara Daur Ulang:<br>
        - Pisahkan berdasarkan warna (bening, hijau, coklat)<br>
        - Cuci bersih<br><br>
        Tips:<br>
        Hati-hati pecahan kaca, gunakan sarung tangan.
        ";
    }

    if ($k == "organik") {
        $title = "Sampah Organik";
        $content = "
        Jenis: Sisa makanan, daun, kulit buah<br><br>
        Cara Daur Ulang:<br>
        - Bisa dijadikan kompos<br>
        - Simpan di wadah tertutup<br><br>
        Tips:<br>
        Jangan campur dengan plastik atau logam.
        ";
    }

    if ($k == "elektronik") {
        $title = "Sampah Elektronik";
        $content = "
        Jenis: HP rusak, kabel, baterai<br><br>
        Cara Daur Ulang:<br>
        - Jangan dibuang sembarangan<br>
        - Bawa ke tempat e-waste khusus<br><br>
        Tips:<br>
        Mengandung bahan berbahaya ⚠️
        ";
    }
}
?>

<?php if ($showPopup): ?>
<div class="popup">
    <div class="popup-box">
        <a href="index.php?close=true" class="close">&times;</a>
        <h3><?= $title ?></h3>
        <p><?= $content ?></p>

        <form method="GET">
            <button type="submit" name="close" value="true">Tutup</button>
        </form>
    </div>
</div>
<?php endif; ?>