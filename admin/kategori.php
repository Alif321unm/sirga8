<?php
$kategori = array();

$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap  = $ambil->fetch_assoc())
{
    $kategori[] = $tiap; 
//echo "<pre>";
//print_r ($kategori);
//echo "</pre>";
}

// Kode ini mengambil semua data dari tabel kategori dalam database, menyimpan data tersebut dalam array $guru, dan kemudian menampilkan isi array tersebut dalam format yang mudah dibaca.
?>
<h4>Data kategori</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama kategori</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($kategori as $key => $value): ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value['nama_kategori']; ?></td>
        </tr>
<?php endforeach ?>
    </tbody>
</table>