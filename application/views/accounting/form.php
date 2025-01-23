<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Akunting</title>
</head>
<body>
    <h2>Form Input Akunting</h2>
    <form method="post" action="<?= base_url('accounting/submit'); ?>">
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br><br>
        
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" name="deskripsi" required><br><br>
        
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br><br>

        <label for="jenis_transaksi">Jenis Transaksi:</label>
        <select name="jenis_transaksi">
            <option value="debit">Debit</option>
            <option value="kredit">Kredit</option>
        </select><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
