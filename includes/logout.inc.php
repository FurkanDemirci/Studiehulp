<?php
session_start();
session_destroy();

header("Location: ../../studiehulp?acc=uitgelogd");
?>