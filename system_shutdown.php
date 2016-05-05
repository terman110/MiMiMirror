<?php
echo '<h1>Shuting down</h1>';
echo '<p>' . exec('shutdown -h now', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>';
echo '<p>' . $return_val . '</p>';
?>
