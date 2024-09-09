<?php
$id = $_GET['id'];

$ambil = $koneksi->query("SELECT * FROM  kelas 
            LEFT JOIN tahun ON kelas.id_tahun=tahun.id_tahun
            LEFT JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan
            WHERE kelas.id_kelas='$id'");
$kelas = $ambil->fetch_assoc();
// echo "<pre>";
// print_r ($kelas);
// echo "</pre>";

$siswakelas = array();
$ambil = $koneksi->query("SELECT * FROM siswakelas
            LEFT JOIN siswa ON siswakelas.id_siswa=siswa.id_siswa
            LEFT JOIN tahun ON siswa.id_tahun=tahun.id_tahun
            WHERE siswakelas.id_kelas='$id' ");
while($tiap = $ambil->fetch_assoc())
{
    $siswakelas[] = $tiap;
}
// echo "<pre>";
// print_r ($siswakelas);
// echo "</pre>";
?>
<h4>Data Siswa Kelas</h4>
<div class="row">
    <div class="col-6">
        <table class="table">
            <tr>
                <td>Tahun Ajaran</td>
                <td><?php echo $kelas['tahun_ajaran']  ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?php echo $kelas['nama_jurusan']  ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?php echo $kelas['nama_kelas']  ?> - <?php echo $kelas['ruang_kelas'] ?></td>
            </tr>
        </table>
    </div>
</div>

<table class="table ">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tahun Masuk</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
<?php foreach  ($siswakelas as $key => $value): ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value['tahun_ajaran'] ?></td> 
            <td><?php echo $value['induk_siswa']?></td>
            <td><?php echo $value['nama_siswa']?></td>
            <td><?php echo $value['kelamin_siswa']?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>