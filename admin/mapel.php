<?php
$mapel = array();

$ambil = $koneksi->query("SELECT * FROM mapel LEFT JOIN kategori ON mapel.id_kategori=kategori.id_kategori");
while ($tiap = $ambil->fetch_assoc()) {
    $mapel[] = $tiap;
}

// Menampilkan isi array mapel
// echo "<pre>";
// print_r($mapel);
// echo "</pre>";

// Kode ini mengambil semua data dari tabel mapel dalam database, menyimpan data tersebut dalam array $mapel, dan kemudian menampilkan isi array tersebut dalam format yang mudah dibaca.
?>

<h4>Data Mata Pelajaran</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Nama Mata Pelajaran</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($mapel as $key => $value): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $value['nama_kategori']; ?></td>
            <td><?php echo $value['nama_mapel']; ?></td>
        </tr>
<?php endforeach ?>
    </tbody>
</table>
