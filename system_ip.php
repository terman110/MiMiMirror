<?php
echo '<p>ifconfig</p>';
echo '<p>' . exec('ifconfig', $output, $return_val) . '</p>';
foreach($output as $out) 
{
	echo $out . '<br />';
}
echo '<p>' . $return_val . '</p>';
?>
