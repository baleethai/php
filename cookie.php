<?php

require 'vendor/autoload.php';

setcookie('name', 'Tum', time() + (86400 * 30), "/"); // 86400 = 1 day

s($_COOKIE['name']);