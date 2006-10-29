<?php

  function printMusicStatus()
  {
    global $music;
    echo '<div id="status">';
    $current =  $music->playlist[$music->current_track_id];
    echo "Artista: " . printArtistLink( $current['Artist'] ) . " - Album: " . printAlbumLink( $current['Album'] ) . " - Titolo: " . printBranoLink( $current['Title'] );
    echo " - Genere: " . printGenreLink( $current['Genre'] ). '<br/>';
    //echo "Durata: " . ceil($current['Time']/60) . ':' . $current['Time']%60 .  "<br/>";
    echo '<a href="javascript:sendCommand(\'previous\');"><img src="img/prev.png"></a> <a href="javascript:sendCommand(\'next\');"><img src="img/next.png"></a>';
    echo '</div>';
  }
  
  function printArtistLink( $artista )
  {
    return "<span id='Artist'><a href='index.php?act=showArtist&artista=$artista'>$artista</a></span>";
  }
  
  function printBranoLink ($brano )
  {
    return "<span id='Brano'><a href='index.php?act=showBrano&brano=$brano'>$brano</a></span>";
  }
  
  function printAlbumLink( $album )
  {
    return "<span id='Album'><a href='index.php?act=showAlbum&album=$album'>$album</a></span>";
  }

  function printGenreLink( $genere )
  {
    return "<span id='Genere'><a href='index.php?act=showGenere&genere=$genere'>$genere</a></span>";
  }
  
?>