<?php
$guru = array();

$ambil = $koneksi->query("SELECT * FROM guru");
while($tiap  = $ambil->fetch_assoc())
{
    $guru[] = $tiap; 
}
// echo "<pre>";
// print_r ($guru);
// echo "</pre>";

// Kode ini mengambil semua data dari tabel guru dalam database, menyimpan data tersebut dalam array $guru, dan kemudian menampilkan isi array tersebut dalam format yang mudah dibaca.
?>

<h4 class="font-weight-normal mb-3">Data Guru</h4>

<div class="row">

    <?php foreach ($guru as $key => $value): ?>

    <div class="col-3">
        <div class="card">
            <img src="../assets/guru/<?php echo $value['foto_guru'] ?>" alt="" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title"><?php echo $value['nama_guru']?></h6>
                <p><?php echo $value['induk_guru']?></p>

                <a href="" class="btn btn-outline-warning btn-sm">Edit</a>
                <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>  
</div>
<a href="index.php?halaman=guru_tambah" class="btn btn-outline-primary btn-sm">Tambah</a>