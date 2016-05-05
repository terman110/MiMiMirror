<?php
echo '<h1>ifconfig</h1>';
echo '<p>' . exec('ifconfig', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>'
echo '<p>' . $return_val . '</p>';
?>
