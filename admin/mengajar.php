<?php
$mengajar = array();
$ambil = $koneksi->query("SELECT * FROM mengajar 
                    LEFT JOIN guru ON mengajar.id_guru=guru.id_guru 
                    LEFT JOIN mapel ON mengajar.id_mapel=mapel.id_mapel
                    LEFT JOIN kategori ON mapel.id_kategori=kategori.id_kategori
                    LEFT JOIN kelas ON mengajar.id_kelas=kelas.id_kelas
                    LEFT JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan
                    LEFT JOIN tahun ON kelas.id_tahun=tahun.id_tahun
                    ");
while($tiap  = $ambil->fetch_assoc())
{
    $mengajar[] = $tiap; 
}
// echo "<pre>";
// print_r ($mengajar);
// echo "</pre>";
?>

<h4>Data Mengajar</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Guru</th>
            <th>Mata_Pelajaran</th>
            <th>Kelas</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mengajar as $key => $value): ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value['nama_guru'] ?> <br> 
                <i class="small-font-italic"><?php echo $value['induk_guru'] ?></i> 
            </td>
            <td>
                <?php echo $value['nama_mapel'] ?> <br>
                <i class="small"><?php echo $value['nama_kategori'] ?></i>
            </td>  
            <td>
                <?php echo $value['nama_kelas'] ?> <br>
                <i class="small"><?php echo $value['nama_jurusan'] ?></i>
                <?php echo $value['ruang_kelas'] ?> <br>
                <i class="small"><?php echo $value['tahun_ajaran'] ?> </i> <br> 
            </td>
            <td> <?php echo $value['semester'] ?> </td>
            <td> <?php echo $value['kkm'] ?> </td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>