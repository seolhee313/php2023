<?php
    // 로그인한 사용자만 접근 가능하도록 설정
    if (!isset($_SESSION['memberID'])) {
        echo "<script>alert('로그인 후 이용해주세요.'); location.href='../login/login.php';</script>";
        exit;
    }
?>