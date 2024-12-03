<?php

$mahasiswa = [
    [   
        "nama" => "Wike Ayu", 
        "nrp" => "073572885",
        "email" => "wikewidi78@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "wike54.jpeg"
    ],
    [   
        "nama" => "Wira malik",
        "nrp" => "03894764", 
        "email" => "wirawike96@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "wike55.jpg"
    ],
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>$nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>


</body>
</html>