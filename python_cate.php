<?php
$argv1 = $_GET["cate"];
$argv2 = $_GET["page"];
echo shell_exec("python3 DHRcrawl_cate.py $argv1 $argv2 2>&1");
echo ("Done");
?>
<div>
	<a href="/index.php">home</a>
</div>
