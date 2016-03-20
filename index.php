<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        include 'classpage.php';
        $myPage = new Page();
        $myPage->load(1);
        echo $mypage->name;
        ?>
    </body>
</html>
