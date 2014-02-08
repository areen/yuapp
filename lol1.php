<html>

    <head>
        <meta charset=utf-8 />
        <title></title>
      

        <script src="http://code.jquery.com/jquery-latest.js"></script>
      
        	<script src=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
        	<script src=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
        	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
        	
        <script src="http://areen.dc7.us/New%20folder/ajax.js"></script>
        <style>
            .styled-select {
                width: 228px;
                height: 34px;
                overflow: hidden;
                background: url(http://3.bp.blogspot.com/-8hquXopMWrY/UEOhmM4qIcI/AAAAAAAALcA/8uVJAMRs14s/s1600/Select.png) no-repeat ;
                border-radius: 10px;
            }
            .styled-select select {
                background: transparent;
                width: 228px;
                padding: 5px;
                border: 1px solid #CCC;
                font-size: 16px;
                height: 34px;
                font-weight: bold;
                outline:0px;
                -webkit-appearance: none;
                border-radius: 10px;
            }
            .styled-select option {
                background: lightgrey;
                width: 228px;
                padding: 5px;
                border: 1px solid #CCC;
                font-size: 16px;
                height: 34px;
                outline:0px;
                -webkit-appearance: none;
            }
            
            body {margin:50px;}

/* Reset */
.accordion,
.accordion ul,
.accordion li,
.accordion a,
.accordion span {
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
}
.accordion li {
  list-style: none;
}

/* Layout & Style */
.accordion li > a {
  display: block;
  position: relative;
  min-width: 110px;
  padding: 0 10px 0 40px;
  height: 32px;

  color: #fdfdfd;
  font: bold 12px/32px Arial, sans-serif;
  text-decoration: none;
  text-shadow: 0px 1px 0px rgba(0,0,0, .35);

  background: #6c6e74;
  background: -moz-linear-gradient(top,  #6c6e74 0%, #4b4d51 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6c6e74), color-stop(100%,#4b4d51));
  background: -webkit-linear-gradient(top,  #6c6e74 0%,#4b4d51 100%);
  background: -o-linear-gradient(top,  #6c6e74 0%,#4b4d51 100%);
  background: -ms-linear-gradient(top,  #6c6e74 0%,#4b4d51 100%);
  background: linear-gradient(top,  #6c6e74 0%,#4b4d51 100%);

  -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255, .1), 0px 1px 0px 0px rgba(0,0,0, .1);
  -moz-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255, .1), 0px 1px 0px 0px rgba(0,0,0, .1);
  box-shadow: inset 0px 1px 0px 0px rgba(255,255,255, .1), 0px 1px 0px 0px rgba(0,0,0, .1);
}

.accordion > li:hover > a,
.accordion > li:target > a {
  color: #3e5706;
  text-shadow: 1px 1px 1px rgba(255,255,255, .2);
  
  /*background: url(../img/active.png) repeat-x;*/
  background: #a5cd4e;
  background: -moz-linear-gradient(top,  #a5cd4e 0%, #6b8f1a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a5cd4e), color-stop(100%,#6b8f1a));
  background: -webkit-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%);
  background: -o-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%);
  background: -ms-linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%);
  background: linear-gradient(top,  #a5cd4e 0%,#6b8f1a 100%); 
}

.accordion li > a span {
  display: block;
  position: absolute;
  top: 7px;
  right: 0;
  padding: 0 10px;
  margin-right: 10px;
  
  font: normal bold 12px/18px Arial, sans-serif;
  background: #404247;
  
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;

  -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0, .2), 1px 1px 1px rgba(255,255,255, .1);
  -moz-box-shadow: inset 1px 1px 1px rgba(0,0,0, .2), 1px 1px 1px rgba(255,255,255, .1);
  box-shadow: inset 1px 1px 1px rgba(0,0,0, .2), 1px 1px 1px rgba(255,255,255, .1);
}


.accordion > li:hover > a span,
.accordion > li:target > a span {
  color: #fdfdfd;
  text-shadow: 0px 1px 0px rgba(0,0,0, .35);
  background: #3e5706;
}

/* Images */

.accordion > li > a:before {
  position: absolute;
  top: 0;
  left: 0;
  content: '';
  width: 24px;
  height: 24px;
  margin: 4px 8px;

  background-repeat: no-repeat;
  background-image: url(http://designmodo.com/demo/css3accordionmenu/img/icons.png);
  background-position: 0px 0px;
}

.accordion li.files > a:before { background-position: 0px 0px; }
.accordion li.files:hover > a:before,
.accordion li.files:target > a:before { background-position: 0px -24px; }

.accordion li.mail > a:before { background-position: -24px 0px; }
.accordion li.mail:hover > a:before,
.accordion li.mail:target > a:before { background-position: -24px -24px; }

.accordion li.cloud > a:before { background-position: -48px 0px; }
.accordion li.cloud:hover > a:before,
.accordion li.cloud:target > a:before { background-position: -48px -24px; }

.accordion li.sign > a:before { background-position: -72px 0px; }
.accordion li.sign:hover > a:before,
.accordion li.sign:target > a:before { background-position: -72px -24px; }

/* Sub Menu */

.sub-menu li a {
  color: #797979;
  text-shadow: 1px 1px 0px rgba(255,255,255, .2);

  background: #e5e5e5;
  border-bottom: 1px solid #c9c9c9;

  -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255, .1), 0px 1px 0px 0px rgba(0,0,0, .1);
  -moz-box-shadow: inset 0px 1px 0px 0px rgba(255,255,255, .1), 0px 1px 0px 0px rgba(0,0,0, .1);
  box-shadow: inset 0px 1px 0px 0px rgba(255,255,255, .1), 0px 1px 0px 0px rgba(0,0,0, .1);
}

.sub-menu li:hover a { background: #efefef; }

.sub-menu li:last-child a { border: none; }

.sub-menu li > a span {
  color: #797979;
  text-shadow: 1px 1px 0px rgba(255,255,255, .2);
  background: transparent;
  border: 1px solid #c9c9c9;

  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

.sub-menu em {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 14px;
  color: #a6a6a6;
  font: normal 10px/32px Arial, sans-serif;
}

/* Functionality */

.accordion li > .sub-menu li {
  height: 0;
  overflow: hidden;

  -webkit-transition: height .2s ease-in-out;
  -moz-transition: height .2s ease-in-out;
  -o-transition: height .2s ease-in-out;
  -ms-transition: height .2s ease-in-out;
  transition: height .2s ease-in-out;
}

.accordion li:target > .sub-menu li {
  height: 33px;
}


        </style>
		
			

	</head>
	<body>


<?php
	 
	 
    $con = mysql_connect('sql111.dc7.us','dc7_14135586','areenhas') or die(mysql_error());
    
    if (!$con) {
        echo "Unable to connect to DB: " . mysql_error();
        exit;
    }
 
    if (!mysql_select_db("dc7_14135586_univ")) {
        echo "Unable to select mydbname: " . mysql_error();
        exit;
    }
    
    $A = mysql_real_escape_string($_POST["areen"]);
   $S = mysql_real_escape_string($_POST["soso"]);

   
		echo"<h1>Your Mark for '" . $S ."'  </h1>";
   
    $sql_Q = "SELECT course_name, mark_first, mark_second,mark_other,mark_final,(mark_first+mark_second+mark_other) mark FROM stdinfo WHERE student_id = " . $A . " AND course_semester ='" . $S ."' ";
    $result = mysql_query($sql_Q);
    if ($result == FALSE) {
        die(mysql_error());
    }
    
 while ($row2 = mysql_fetch_array($result)) { 
		  $sum = $row2["mark_first"] + $row2["mark_second"] + $row2["mark_other"];
            echo"<ul  class='accordion'>
							  <li id='two' class='mail'><a href='#two'>" . $row2["course_name"] . "<span>$sum</span></a>
								<ul  class='sub-menu'>
								  <li><a href='#two'><em>01</em>First<span>" . $row2["mark_first"] . "</span></a></li>
								  <li><a href='#two'><em>02</em>Second<span>" . $row2["mark_second"] . "</span></a></li>
								  <li><a href='#two'><em>03</em>Other<span>" . $row2["mark_other"] . "</span></a></li>
								  <li><a href='#two'><em>04</em>Final<span>" . $row2["mark_final"] . "</span></a></li>
								</ul>
				</li>
				<li id='three' class='cloud'>
    <a href='#three'>Cloud<span>58</span></a>
    			</li>
				
				</ul>";
	}

	?>

	
							
	</body>
	
	
</html>