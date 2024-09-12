<?php
    if(session_status() != PHP_SESSION_ACTIVE)
    {
        session_cache_expire(60); // 60 minutos de inatividade a sessão fecha
        session_start();
    }
?>