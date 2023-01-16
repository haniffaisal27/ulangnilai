<?php
include ('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/styles.css">
</head>

<body>
    <center>
        <table>
            <caption>SENARAI NAMA PELAJAR</caption>
            <tr>
                <td class="head">Id</td>
                <td class="head">Nombor NDP</td>
                <td class="head">Nombor Penuh</td>
                <td class="head">Nombor KP</td>
                <td class="head">Jantina</td>
                <td class="head">Nombor HP</td>
                <td class="head">Operation</td>
            </tr>
            <?php
            $sql = "SELECT * FROM info_pelajar ORDER BY id ASC";
            $data = mysqli_query($conn, $sql);
            while ($pelajar = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $pelajar['id']; ?></td>
                    <td><?php echo $pelajar['nondp']; ?></td>
                    <td><?php echo $pelajar['namapelajar']; ?></td>
                    <td><?php echo $pelajar['nokp']; ?></td>
                    <td><?php echo $pelajar['jantina']; ?></td>
                    <td><?php echo $pelajar['nohp']; ?></td>
                    <td>
                        <a href="padampelajar.php?nokp=<?php echo $pelajar['nokp'];?>">
                            <img src="asset/icons8-remove-48.png"> </a> 
                    </td> 
                </tr> 
            <?php 
            } 
            ?> 
        </table>
        <button><a href="tambahpelajar.php">Tambah pelajar</a></button>
    </center>
</body>

</html>