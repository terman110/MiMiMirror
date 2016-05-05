<?php
echo '<h1>Update Pi</h1>';
echo '<p>' . exec('apt-get update & apt-get upgrade', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>'
echo '<p>' . $return_val . '</p>';
?>
