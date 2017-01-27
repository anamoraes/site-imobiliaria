<?php
    session_destroy();

    echo "<script>alert('Você foi desconectado');top.location.href='../';</script>";
?>