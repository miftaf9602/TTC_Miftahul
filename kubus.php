<?php 
    @$sisi = $_GET['sisi'];
    @$volume = $sisi * $sisi * $sisi;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>KUBUS</title>
    </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>sisi</td>
                    <td>=</td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Volume Kubus = ".$volume." cm^3<br/>";
            ?>
        </form>
    </body>
</hmtl>