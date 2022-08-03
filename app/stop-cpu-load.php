<?php
  # Start PHP Session to keep track of whether or not load is getting generated
  session_start();
  
  echo "<meta http-equiv=\"refresh\" content=\"2,URL=/index.php\" />";

  $idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');

  if ($idleCpu < 50) {

    echo exec('killall gzip  > /dev/null &');
    echo "Parando CPU ! ";
  }
  else {
    echo "Ja esta baixo";
  }
?>
