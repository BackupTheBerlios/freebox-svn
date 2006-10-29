  function parserJavascript( data )
  {
    alert( data );
  }

  function sendCommand( comando )
  {
    dojo.io.bind(
    {
      url: "index.php?act=command&state=no&subact=" + comando,
      load: function( type, data, evt ) { alert( data[3][1] ); },
      mimetype: "text/javascript"
    });
  }
