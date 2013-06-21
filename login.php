<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>=
    </head>
    <body>
        <?php
        $n = $_GET['name'];
        $p = $_GET['pass'];

        session_start();
        include './DBC.php';

        $result = mysqli_query($con, "select * from user where username='" . $n . "' and password='" . $p . "'");

        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['name'] = $row['fname'];
            $arr = array();
            $_SESSION['prods'] = $arr;
            echo 'hello....' . $n;
        } else {
            echo 'duh...';
        }

        if ($n == "a" && $p == "a") {
            echo 'hello >>' . $n;
            //setcookie('name', $n); // one possible way
            $_SESSION['name'] = $n;
        } else if ($n == "b" && $p == "b") {
            echo 'hello >>' . $n;
            //setcookie('name', $n);
            $_SESSION['name'] = $n;
        } else if ($n == "c" && $p == "c") {
            echo 'hello >>' . $n;
            //setcookie('name', $n);
            $_SESSION['name'] = $n;
        } else {
            echo 'something wrong!';
        }
        ?>
    </body>
</html>
