<?php
$mahasiswa = [
    ["wike ayu", "082637867", "wikewidi85@gmail.com", "Rekayasa Perangkat Lunak"],
    ["wira maik", "03894764", "wirawike96@gmail.com", "Rekayasa Perangkat Lunak"],
];

$mahasiswa = [
    [
        "nama" => "wike ayu",
        "nrp" => "03894764",
        "email" => "wikewidi85@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "wike1.jpg"
    ],
    [
        "nama" => "wira maik",
        "nrp" => "082637867",
        "email" => "wirawike96@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "wike2.jpg"
    ],
];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" width="70">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>





</body>
</html>

</body>
</html>