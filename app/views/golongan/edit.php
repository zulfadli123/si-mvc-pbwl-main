<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <table>
    <input type="hidden" name="gol_id"value="<?php echo $data['row']['gol_id']; ?>">
    <tr>
            <td>KODE GOLONGAN</td>
            <td><input type="text" name="gol_kode"value="<?php echo $data['row']['gol_kode']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA GOLONGAN</td>
            <td><input type="text" name="gol_nama"value="<?php echo $data['row']['gol_nama']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>