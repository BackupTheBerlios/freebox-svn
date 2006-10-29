<?
  //variabili globali
  $status = "Tutto ok!";
  $music = '';
  
  function ilMacinatoreOn()
  {
    
    //dbConnect();
    mpdConnect();


    $action = ucfirst ( isset( $_GET['act'] ) ?$_GET['act']:'home' );
    if ( ! file_exists ( ROOT . "/inc/act{$action}.php" ) )
      exit(0);
  
    if ( isset ( $_GET['state'] ) )
    {
      include ( ROOT . "/inc/act{$action}.php" );
      exit(0);
    }
    
    printHeader();
    printMenu();
    printTop();

    echo "<div id='main'>\n";
    include ( ROOT . "/inc/act{$action}.php" );
    echo "</div>\n";

  }

  
  function ilMacinatoreOff()
  {
    global $status;
    showInfo( $status );
    printFooter();
  }
  
  function showInfo( $string )
  {
?>
  <span class='info'>
  <img src='img/information.gif'>
  <?=$string?>
  </span>
<?
  }
  
?>