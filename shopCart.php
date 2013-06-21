<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="calcprice.php" onsubmit="">
            <?php
            session_start();
            if ($_SESSION['total'] != NULL && $_SESSION['name'] != NULL) {
                echo $_SESSION['total'];
                echo $_SESSION['name'];
            }
            ?>
            <table>
                <thead>
                <th>name</th>
                <th>price</th>
                <th>qty</th>
                <th>image</th>
                <th>description</th>
                </thead>
                <tbody>

                    <?php
                    
                    session_start();
                    include './DBC.php';
                    $result = mysqli_query($con, "select * from shop ");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                <td>' . $row['name'] . '</td>
                <td>' . $row['pri'] . '</td>
                <td>' . $row['qty'] . '</td>
                <td>' . $row['img'] . '</td>
                <td>' . $row['desc'] . '</td>
                <td><input type="text" name="qty" id="qty"></td>
                <td><input type="hidden" name="name" value=' . $row['name'] . '></td>
                <td><input type="hidden" name="price" value=' . $row['pri'] . '></td>
                <td><input type="submit" value="Add"></td>
            </tr>';
                    }
                    
                    $prs=$_SESSION['prds'];
                    foreach ($prs as $key => $value){
                        echo $key." ".$value."<br>";
                    }
                    
                    ?> 

                </tbody>
            </table>
        </form>

    </body>
</html>
