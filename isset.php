<?php
if(isset($_POST['updatewhey'])){
    echo 'update button pressed';
}else{
    echo 'update button is not pressed';
}
?>
<form action="/GYMMANIA/isset.php" method="POST">
<input type="submit" name="updatewhey" value="UPDATECART"></input>
</form>