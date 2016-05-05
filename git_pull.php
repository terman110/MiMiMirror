<?php
echo '<h1>git pull</h1>';
echo '<p>' . exec('sudo git -C /home/pi/projects/MiMiMirror pull', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>';
echo '<p>' . $return_val . '</p>';
echo '<p>---</p>'
echo '<p>' . exec('sudo git -C /home/pi/projects/RPiMotionDetect pull', $output, $return_val) . '</p>';
echo '<p>';
foreach($output as $out)
	echo $out . '<br />';
echo '</p>';
echo '<p>' . $return_val . '</p>';
?>
