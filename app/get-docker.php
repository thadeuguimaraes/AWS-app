<?php
  # This code performs a simple vmstat and grabs the current CPU idle time
  $idleCpu = exec('cut -c9- < /proc/1/cpuset');

  # Print out the idle time, subtracted from 100 to get the current CPU utilization
  echo "<br /><p>ID container: <b>"; 
  echo $idleCpu;
  echo "</b></p>";
  
?>