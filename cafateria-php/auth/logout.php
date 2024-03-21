<?php
setcookie('usermail','',time()-60*60,'/');
setcookie('userfname','',time()-60*60,'/');
setcookie('userlname','',time()-60*60,'/');
setcookie('userrole','',time()-60*60,'/');
setcookie('reg_date','',time()-60*60,'/');
setcookie('guests_id','',time() + 60*60,'/');

header("location:register.php")
?>