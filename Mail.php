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
        <?php
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['msg'];
        
        mail($to, $subject, $message);
        
        echo '<h2>Mail Sent</h2>';
        ?>
    </body>
</html>
