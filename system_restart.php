<?php
echo '<h1>Restarting</h1>';
echo '<p>' . exec('shutdown -r now', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>'
echo '<p>' . $return_val . '</p>';
?>
