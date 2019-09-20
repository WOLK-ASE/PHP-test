<?php
setcookie('user', 'correct', time() + 3600, '/');
header('location: /');