<?php
include "koneksi.php";
$query = mysqli_query($connection,"SELECT * FROM data ORDER BY id DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        
        <tr>
            <th>no</th>
            <th>tanggal</th>
            <th>suhu</th>
            <th>hum</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["tanggal"];?></td>
            <td><?php echo $data["suhu"];?></td>
            <td><?php echo $data["hum"];?></td>
           
        </tr>
        <?php echo $data["suhu"];?>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

