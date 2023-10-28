<!DOCTYPE html>
<html lan="en">
    <meta charset="UTF-8"></meta>

<body>

<span>Read data</span>
<a href='save.php'>Add data</a>
<table>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php
    require_once('db.php');

    $sql = "SELECT * FROM users";
    $result = mysqli_query($con,$sql);

    while($row= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>". $row['id'] ."</td>";
        echo "<td>". $row['name'] ."</td>";
        echo "<td>". $row['email'] ."</td>";
        echo "<td>";
        echo "<a href='edit.php?id=".$row['id']."'>Edit<a>|<a href='delete.php/?id=".$row['id']."'>del<a>";
        echo "</td>";
        echo "</tr>";
    }



    
 

    ?>
</table>

</body>
</html>