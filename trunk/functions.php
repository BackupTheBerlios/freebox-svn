<?php

  function printMusicStatus()
  {
    
    $current =  $music->playlist[$music->current_track_id];
    echo "Artista: {$current['Artist']}<br/>";
    echo "Album: {$current['Album']}<br/>";
    echo "Titolo: {$current['Title']}<br/>";
    echo "Genere: {$current['Genre']}<br/>";
    echo "Durata: " . ceil($current['Time']/60) . ':' . $current['Time']%60 .  "<br/>";
    echo '<a href="javascript:sendCommand(\'previous\');">&lt;&lt;</a> :: <a href="javascript:sendCommand(\'next\');">&gt;&gt;</a>';
  }
?>