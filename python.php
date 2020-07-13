<?php
echo $_GET["id"];
$argv = $_GET["id"];
echo shell_exec("python3 DHRcrawl.py $argv 2>&1");
echo ("Done");
?>
<div>
	<a href="/index.php">home</a>
</div>
