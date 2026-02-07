<h3>Hitung Luas & Keliling Persegi Panjang</h3>
<form action="persegi/prosespersegi.php" method="post">
    <table border="0" cellpadding="5">
        <tr>
            <td><label for="panjang">Panjang</label></td>
            <td>:</td>
            <td>
                <input type="number" name="panjang" id="panjang" required step="any" placeholder="0">
            </td>
        </tr>
        <tr>
            <td><label for="lebar">Lebar</label></td>
            <td>:</td>
            <td>
                <input type="number" name="lebar" id="lebar" required step="any" placeholder="0">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <br>
                <button type="submit" name="hitung">Hitung Sekarang</button>
                <button type="reset">Reset</button>
            </td>
        </tr>
    </table>
</form>