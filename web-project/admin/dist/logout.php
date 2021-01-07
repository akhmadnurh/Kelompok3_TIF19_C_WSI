<?php
    session_start();
    session_unset();
    session_destroy();

    header("Location: http://localhost/Kelompok3_TIF19_C_WSI/web-project/");

?>