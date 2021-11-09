<?php
if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else{
    $controller = 'pages';
    $action = 'home';
}
?>

<html>
<head></head>
<body>
    <?php echo "controller = ".$controller.", action = ".$action ;?>
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_121/?controller=pages&action=home> Part 1 </a>] 
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_122/?controller=pages&action=home> Part 2 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_123/?controller=pages&action=home> Part 3 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_124/?controller=pages&action=home> Part 4 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_125/Myweb/?controller=home&action=home> Part 5 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_126/?controller=pages&action=home> Part 6 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_127/?controller=pages&action=home> Part 7 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_128/?controller=pages&action=home> Part 8 </a>]
    <br>
    <br>
    [<a href=http://158.108.207.4/db21/db21_129/?controller=pages&action=home> Part 9 </a>]

    <br> 
</body>
</html>