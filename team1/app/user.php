<?php

echo isset($_SESSION["user"])?"app-secure":"app-non-secure";
print_r ($_SESSION);
?>