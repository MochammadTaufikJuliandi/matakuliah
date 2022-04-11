<html>
<head>
    <title>Form Input Matakuliah</title>
</head>
<body bgcolor=black>
    <center>
        <form action="<?= ('matakuliah/cetak'); ?>"
method="post">
             <table>
                <tr>
                    <th colspan="3" style="color:white">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3" style="color:white">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th style="color:white">Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <?=form_error('kode'); ?>
                <tr>
                    <th style="color:white">Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <?=form_error('nama'); ?>
                <tr>
                    <th style="color:white">SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Lanjutkan">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>