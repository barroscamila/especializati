<?php

// setcookie('cookie_teste', 'Teste Cookie');
// setcookie('auth', 'OK', time() + 5);
setcookie('auth', 'OK', time() + (7 * 24 * 60 * 60)); // 7 dias em segundos

// echo $_COOKIE['cookie_teste'];
echo $_COOKIE['auth'];