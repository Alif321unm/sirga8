<?php
$kelas = array();

$ambil = $koneksi->query("SELECT * FROM kelas LEFT JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan LEFT JOIN tahun ON kelas.id_tahun=tahun.id_tahun");
while($tiap  = $ambil->fetch_assoc())
{
    $kelas[] = $tiap; 
}
// echo "<pre>";
// print_r ($kelas);
// echo "</pre>";
?>

<h4>Data Kelas</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>ruang</th>
            <th>Jenjang</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($kelas as $key => $value): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $value['tahun_ajaran']; ?></td>
            <td><?php echo $value['nama_jurusan']; ?></td>
            <td><?php echo $value['nama_kelas']; ?></td>
            <td><?php echo $value['ruang_kelas']; ?></td>
            <td><?php echo $value['jenjang_kelas']; ?></td>
            <td>
                <a href="index.php?halaman=siswakelas&id=<?php echo $value['id_kelas'] ?>" class="btn btn-info btn-sm">Siswa</a>
            </td>
        </tr>
<?php endforeach ?>
    </tbody>
</table>
