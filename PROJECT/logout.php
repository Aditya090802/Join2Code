
<?php
    session_start();

    session_destroy();

  

    setcookie('email_cookie','',time()-86400);

    setcookie('pwd_cookie','',time()-86400);

    header('location:home_page.php');
?>
<script>

Session.Clear();
</script>