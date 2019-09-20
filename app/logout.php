<?php
    
    // Finaliza la sesión y libera las variables de sesión

    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php");
