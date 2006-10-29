<?
  header("Content-type: application/x-javascript");
  global $music;
  $comando = ucfirst($_GET['subact']);
  $music->{$comando}();
  $current =  $music->playlist[$music->current_track_id];
  echo "[[ \"command\", \"$comando\"] ";
  foreach ( $current as $key => $value )
    echo ", [ \"$key\", \"$value\" ]";
  echo ']';
  exit;
?>