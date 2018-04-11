<?php
session_start ();
session_destroy ();
die("<script>window.top.location='login.php'</script>");