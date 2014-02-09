<html>

    <head>
        <meta charset=utf-8 />
        <title></title>
         <script src="http://code.jquery.com/jquery-latest.js"></script>
        	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
          <link rel="stylesheet" type="text/css" href="http://areen.dc7.us/New%20folder/tst.css">
      

        	
        <script src="http://areen.dc7.us/New%20folder/ajax.js"></script>
        
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
            echo"<ul id='nav' class='accordion'>
							  <li><a href='#'>" . $row2["course_name"] . "<span>$sum</span></a>
								<ul class='sub-menu'>
								  <li><a href='#'><em>01</em>First<span>" . $row2["mark_first"] . "</span></a></li>
								  <li><a href='#'><em>02</em>Second<span>" . $row2["mark_second"] . "</span></a></li>
								  <li><a href='#'><em>03</em>Other<span>" . $row2["mark_other"] . "</span></a></li>
								  <li><a href='#'><em>04</em>Final<span>" . $row2["mark_final"] . "</span></a></li>
								</ul>
				</li>
						</ul>";
	}

	?>

							
	</body>
	
	
</html>