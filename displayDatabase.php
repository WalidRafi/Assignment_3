<?php
$conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
?>

<table>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Mobile</th>

    <?php
    
    
    $sql = "SELECT * from database_table";
    $query = mysqli_query($conn, $sql);
    while ($info = mysqli_fetch_array($query)){
        ?>

        <tr>
            <td><?php echo $info ['First_name'];?></td>
            <td><?php echo $info ['Last_name'];?></td>
            <td><?php echo $info ['Email'];?></td>
            <td><?php echo $info ['Mobile'];?></td>
        </tr>
        <?php
    }
    
    ?>


</table>
