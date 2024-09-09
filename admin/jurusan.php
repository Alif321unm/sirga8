<?php
$jurusan = array();

$ambil = $koneksi->query("SELECT * FROM jurusan");
while($tiap  = $ambil->fetch_assoc())
{
    $jurusan[] = $tiap; 
//echo "<pre>";
//print_r ($jurusan);
//echo "</pre>";
}

// Kode ini mengambil semua data dari tabel jurusan dalam database, menyimpan data tersebut dalam array $guru, dan kemudian menampilkan isi array tersebut dalam format yang mudah dibaca.
?>
<h4>Data Jurusan</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($jurusan as $key => $value): ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value['nama_jurusan']; ?></td>
        </tr>
<?php endforeach ?>
    </tbody>
</table>