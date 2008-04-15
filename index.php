<pre>
<?php
	foreach ($_GET as $command => $arguments) {
		passthru("cd .. && git $command $arguments 2>&1");
	}
?>
</pre>
