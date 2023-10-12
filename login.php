<?php

if($_POST['username']== 'ahmed' and $_POST['password']=='0000'){
    header('location:show.html');
}else{
    header('location:error.html');
}

?>