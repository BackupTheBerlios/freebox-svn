<?
  header("Content-type: application/x-javascript");
  global $music;
  $comando = ucfirst($_GET['subact']);

  switch( $comando )
  {
    case 'AddToPlaylist':
      session_start();
      if ( ! is_array( $_SESSION['playlist'] ) ) $_SESSION['playlist'] = array();
      if ( ! in_array(  $music->current_track_id, $_SESSION['playlist'] ) )
      {
        array_push( $_SESSION['playlist'], $music->current_track_id );
      }
      break;
      
    default:
      $music->{$comando}();
      $current =  $music->playlist[$music->current_track_id];
      $current['usbStatus'] = usbStatus();
      echo "[{ \"command\": \"$comando\" ";
      foreach ( $current as $key => $value )
        echo ",  \"$key\": \"$value\" ";
      echo '}]';    
    }
  exit;
?>