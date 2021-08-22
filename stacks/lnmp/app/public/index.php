<?php
// DB 접속
// js style: let pdo = new PDO(arg1, arg2, arg3, { [PDO.ATTR_ERRMODE]: PDO.ERRMODE_EXCEPTION });
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// 쿼리 구성
// js style: let query = pdo.query('SHOW VARIABLES like "version"');
$query = $pdo->query('SHOW VARIABLES like "version"');

// 쿼리 실행
// js style: let row = query.fetch();
$row = $query->fetch();

// 화면 출력
// js style: console.log('MySQL version:' + row.Value);
echo 'MySQL version:' . $row['Value'];
