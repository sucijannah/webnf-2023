<?php 
// array multidimensi
$buah1 = [
    'id'=>'1',
    'Nama'=>'Pisang',
    'Warna'=>'Kuning',
    'Stok'=>'150 Buah',
    'Harga'=>'30000',
    'Deskripsi'=>'Pisang adalah berupa herba yang berasal dari kawasan di asia tenggara',
];
$buah2 = [
    'id'=>'2',
    'Nama'=>'Manggis',
    'Warna'=>'Ungu',
    'Stok'=>'200 Buah',
    'Harga'=>'35000',
    'Deskripsi'=>'Manggis mengandung serat yang sangat penting untuk kesehatan pencernaan',
];
$buah3 = [
    'id'=>'3',
    'Nama'=>'Mangga',
    'Warna'=>'Oren',
    'Stok'=>'70 Buah',
    'Harga'=>'25000',
    'Deskripsi'=>'mangga mempunyai vitamin C, B6',
];
$buah4 = [
    'id'=>'3',
    'Nama'=>'Melon',
    'Warna'=>'Hijau',
    'Stok'=>'70 Buah',
    'Harga'=>'20000',
    'Deskripsi'=>'Melon merupakan buah termaksuk famili cucurbitaceae',
];
$buah5 = [
    'id'=>'3',
    'Nama'=>'Durian',
    'Warna'=>'Kuning',
    'Stok'=>'80 buah',
    'Harga'=>'50000',
    'Deskripsi'=>'Durian yang mempunyai kulit yang tajam ',
];

$ar_nilai = [$buah1, $buah2, $buah3, $buah4, $buah5];
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
    ">
    <title>Array Table Buah</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Warna</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['Nama'];?></td>
                <td><?= $nilai['Warna'];?></td>
                <td><?= $nilai['Stok'];?></td>
                <td><?= $nilai['Harga'];?></td>
                <td><?= $nilai['Deskripsi'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>