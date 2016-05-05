<?php
echo '<h1>git pull</h1>';
echo '<p>' . exec('cd /home/pi/projects/MiMiMirror & git pull', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>';
echo '<p>' . $return_val . '</p>';
?>
