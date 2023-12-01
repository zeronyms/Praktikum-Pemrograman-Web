
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hasil Perhitungan IPK dan Status Kelulusan</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hasilAkhir = 0.0;
        $totalNilai = 0;
        $statusLulus = false;
        $mk1 = $_POST['nilai_matkul1'];
        $jumlahArray = count($_POST);


        // echo $mk1."<br>"; 
        
        // echo "Panjang Array: $jumlahArray"."<br>";


        foreach($_POST as $value){
            $totalNilai += $value;
        }

        // echo $totalNilai."<br>";

        // hitung rata rata = 
        $hasilAkhir = $totalNilai / $jumlahArray;

        // echo $hasilAkhir;

        echo "IPK: $hasilAkhir"."<br>";
        if ($hasilAkhir > 1) {
            echo "Status Kelulusan: Lulus";
        } else {
            echo "Status Kelulusan: Tidak Lulus";
        }
        echo "<br>";
    }
    ?>
    <a href="index.html">Kembali</a>
</body>
</html>
