<!-- soal
1. brang ada 3, harga (20.000, 30.000, 50.000)
2. diskon barang ke 3 saja: 20 %;
3. ketika total bayar > 75.000 dapat diskon 15%
4. diskon hanya boleh salah satu, dipilih diskon yang terbesar
5. hitung jumlah bayar -->
<?php

$barang = 3;
$jumlah = 6;
$jenis = "";
$harga = 0;
$bayar = 0;
switch ($barang) {
    case 1:
        $jenis = "Aqua";
        $harga = 20000;
        $total = $harga * $jumlah;

        break;
    case 2:
        $jenis = "Beras";
        $harga = 30000;
        $total = $harga * $jumlah;

        break;
    case 3:
        $jenis = "Mie Sedap";
        $harga = 50000;
        $total = $harga * $jumlah;
        break;
}
$dis = 15 / 100;
$disb3 = 20 / 100;
if ($total > 75000 && $jenis == "Mie Sedap") {
    $diskon = $total * $disb3;
    $bayar = $total - $diskon;
    $p_diskon = "20 %";
} elseif ($total > 75000) {
    $diskon = $total * $dis;
    $bayar = $total - $diskon;
    $p_diskon  = "15 %";
} else {
    $bayar = $total;
    $p_diskon  = "-";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php3</title>
    <style>
        body {
            background: #f1f1f1;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }

        .container {
            width: 860px;
            margin: auto;
        }

        table {
            color: #0e0e0e;
            border-collapse: collapse;
            border-left: 5px #0e0e0e solid;
            border-right: 5px #0e0e0e solid;
        }

        td,
        th {
            padding: 10px;
            background: #859ec9;

        }

        th {
            background: #526a94;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Barang</th>
                <th>Harga Barang</th>
                <th>Jumlah Barang</th>
                <th>Diskon</th>
                <th>Total</th>
                <th>Potongan</th>
                <th>Jumlah Bayar</th>
            </tr>
            <tr>
                <td><?php echo $jenis; ?></td>
                <td>Rp. <?php echo $harga; ?></td>
                <td><?php echo $jumlah; ?></td>
                <td><?php echo $p_diskon; ?></td>
                <td>Rp. <?php echo $total; ?></td>
                <td>Rp. <?php echo $diskon; ?></td>
                <td>Rp. <?php echo $bayar; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>