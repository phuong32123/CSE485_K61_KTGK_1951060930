<?php
    // Kết nối SQL
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'xe_cho_thue';
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if (!$conn) {
        die('Không kết nối được');
    }
?>