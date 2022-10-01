<form method="post"><input name="img" value='1' type="submit"></form>
<?php
if(isset($_POST['img']) && $_POST['img']!='1'){
file_put_contents('1.png',base64_decode($_POST['img']));
system('identify.py');
}
?>