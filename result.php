<?php
session_start();
echo 'Ваш результат ' . ($_SESSION['3task']+$_SESSION['2task']+$_SESSION['3task']) . ' балла из трех';

