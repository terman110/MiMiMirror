<?php
echo '<p>Update Pi</p>';
echo exec('apt-get update');
echo exec('apt-get upgrade');
?>
