<!-- 
    NIK
● Nama
● Provinsi
● Kota
● Nomor telpon
 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Penduduk</title>
</head>

<body>
    <h1>Form Data Penduduk</h1>
    <form method="post" action="{{ route('submit-data')}}">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="NIK">NIK:</label>
        <input type="text" id="NIK" name="NIK" required><br>
        
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required><br>

        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" required><br>

        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br>

        <button type="submit">Submit Data</button>
    </form>
</body>

</html>