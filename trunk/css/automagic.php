body {
  margin: 0px;
  padding: 0px;
  font-family: Verdana, Monospace;
  font-size: 14px;
  text-align: justify;
}


<?
  $top['margin']='0px 0px 0px 0px';
  $top['padding']='10px';
  $top['padding-right']='120px';
  $top['background-color']='#eeeeee';
  $top['height']='70px';

  function printObjProperty( $name, $voice )
  {
    $properties = $$name;
    echo "\n${voice}${name} {\n";
    foreach ( $properties as $key => $value )
    {
      echo "  $key: $value;\n";
    }
    echo "}";
  }

?>

#top {
	margin: 0px 0px 0px 0px;
	padding: 10px;
    padding-right: 120px;
	background-color: #eeeeee;
    border-bottom: 1px solid #aaaaaa;
	height: 90px; /* ie5win fudge begins */
	voice-family: "\"}\"";
	voice-family:inherit;
	height: 90px;
	}
    
html>body #top {
	height: 70px; /* ie5win fudge ends */
	}
    
#left {
	position: absolute;
	top: 110px;
	left: 0px;
	padding: 5px;
    font-family: Verdana, Monospace;
    font-size: 14px;
	border: 1px solid #aaaaaa;
    border-left: none;
	background: #eeeeee;
	width: 170px; /* ie5win fudge begins */
	voice-family: "\"}\"";
	voice-family:inherit;
	width: 170px;
	}
    
html>body #left {
	width: 160px; /* ie5win fudge ends */
	}
    
#main {
    font-family: Verdana, Monospace;
	margin: -1px 190px 20px 190px;
	padding: 10px;
	border: 1px solid #aaaaaa;
    border-top: 1px solid #eeeeee;
	background: #eeeeee;
	}
    
#right {
	position: absolute;
	top: 110px;
	right: 0px; /* Opera5.02 will show a space 
	at right when there is no scroll bar */
	padding: 5px;
	border: 1px solid #aaaaaa;
    border-right: none;
	background: #eeeeee;
	width: 170px; /* ie5win fudge begins */
	voice-family: "\"}\"";
	voice-family:inherit;
	width: 170px;
}
    
html>body #right {
	width: 160px; /* ie5win fudge ends */
	}


h4 {
  vertical-align: middle;
  font-size: 16px;
  border-bottom: 1px solid #aaaaaa;
  margin: 0px;
  padding-bottom: 2px;
}

img {
  vertical-align: middle;
}

ul,
ul li
{
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	display: block;
}

#right ul {
  text-align: left;
}

#left ul {
  text-align: right;
  
}


ul
{
  margin-top: 10px;
  border-bottom-width: 0px;
  line-height: 10px; /* ie5win fudge begins */
  voice-family: "\"}\"";
  voice-family:inherit;
  line-height: 10px;
}
    
html>body ul {
	line-height: 20px; /* ie5win fudge ends */
}




#left ul li a,
#right ul li a

{
	display: block;
	padding: 2px 10px;
}

#left ul li a:hover,
#right ul li a:hover
{
  background: #ccccff;
}

/* Hide from IE-mac \*/
* html .vnav ul li a/* hide from IE 5.0 */ {height: 1%;}
/* End hide */

a,
a:link,
a:visited
{
  color: #000099;
  text-decoration: none;
}

textarea,
input {
  font-size: 12px;
  border: 1px solid #aaaaaa;
}

textarea:hover, 
input:hover
{
  background: #f4f4ff;
}

textarea:focus,
input:focus{
  border: 1px solid #666666;
}


br {
  line-height: 5px;
}

hr {
  border: none;
  border-bottom: 1px solid #aaaaaa;
  height: 1px;
}

.msg {
  border: 1px solid #aaaaaa;
  margin-left: 2%;
  margin-right: 2%;
}

.msg pre {
  margin: 0px;
  padding: 3px;
}

.msg h4 {
  font-size: 13px;
  padding: 2px;
  padding-left: 5px;
  background: #dcdcff;
  height: 17px;
}

.comment h4 {
  font-size: 13px;
  padding: 2px;
  padding-left: 5px;
  background: #ffeeaa;
  height: 17px;
}

div.msg:hover 
{
  border: 1px solid #666666;
}

img {
  border: none;
}

.testo {
  padding: 3px;
}

.info {
  float:right;
  border: 1px solid #aaaaaa;
  border-top: none;
  margin-top: -10px;
  padding: 2px;
  background: #dcdcff;
  width: 350px;
}


.tab
{
  padding-left: 10px;
  border-bottom: 1px solid #aaaaaa;
}

.tab li{
  border: 1px solid #aaaaaa;
  display: inline;
  margin-left: 5px;
}

.tab li:hover
{
  background-color: #dcdcff;
}

.tab .selected {
  border-bottom: 1px solid #e0e0f0;
  background: #dcdcff;
}


.tab a {
  text-decoration: none;
  padding-left: 3px;
  padding-right: 3px;
}
 