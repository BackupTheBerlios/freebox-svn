<?
  function printHeader()
  {
    session_start();
?>
<html>
<head>
  <TITLE>a<?=$TITLE?></TITLE>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <META NAME="description" CONTENT="<?=$DESCRIPTION?>">
  <META NAME="keywords" CONTENT="<?=$KEYWORDS?>">
  <LINK href="css/staila.css" type="text/css" rel="stylesheet">
  <script type='text/javascript' src='scripts/dojo.js'></script>
  <script type='text/javascript' src='scripts/comandi.js'></script>
  <script>
    setInterval( "sendCommand('refreshInfo');", 5000);
  </script>
</head>
<body>

<? }
  
  function printFooter()
  {
?>
</body>
</html>
<?
  }
?>