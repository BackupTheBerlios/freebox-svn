  function parserJavascript( data )
  {
    artist = document.getElementById( 'Artist' );
    artist.innerHTML= '<a href="index.php?act=showArtist&artist=' + data.Artist + '">' + data.Artist + '</a>';
    album = document.getElementById( 'Album' );
    album.innerHTML= data.Album;
    brano = document.getElementById( 'Brano' );
    brano.innerHTML= data.Title;
    genere = document.getElementById( 'Genere' );
    genere.innerHTML= data.Genre;
    
    usb = document.getElementById( 'usbStatus' );
    if ( data.usbStatus == '1' )
      usb.innerHTML = '<img src="img/music.png">';
    else
      usb.innerHTML = '';

  }

  function sendCommand( comando )
  {
    dojo.io.bind(
    {
      url: "index.php?act=command&state=no&subact=" + comando,
      load: function( type, data, evt ) { parserJavascript( data[0] ); },
      mimetype: "text/javascript"
    });
  }