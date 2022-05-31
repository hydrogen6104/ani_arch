<?php
   $con=mysqli_connect("localhost", "root", "1234", "anidb") or die("MySQL 접속 실패 !!");

   $sql ="
		SELECT * FROM ani_tb WHERE year BETWEEN 1980 AND 1989
   ";
 
   $ret = mysqli_query($con, $sql);

   
   mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animation Archive</title>
    <link href="style.css" rel="stylesheet" type="text/css" /> 
    
  </head>
  <body>
    <nav>
        <div class="nav-outer-div">
            <span style="height: 100%; display: inline-block; line-height: 50px;">
                <a href="main.html"><b>Animation Archive</b></a>
            </span>
            <div class="nav-inner-div">
                <span class="nav-span"><a href="#">1980s</a></span>
                <span class="nav-span"><a href="1990s.php">1990s</a></span>
                <span class="nav-span"><a href="2000s.php">2000s</a></span>
                <span class="nav-span"><a href="all.php">ALL</a></span>
            </div>
        </div>

    </nav>
    
    <header style="">
        <div style="width:80%; height: 200px; left:10%; top:15%; position: relative;">
            <div class="cate-btn" style="width: 200px; height: 200px; left:25%; top:50%; margin-left:-100px; margin-top:-100px; 
            text-align:center; position: absolute; 
            border: 1px solid lightgray; border-radius: 5px; box-shadow: 1px 1px 3px grey;">
                <img src="check.png">
                <p><b>By genre</b></p>
                <span>You can search for records by genre.</span>
            </div>
        
            <div class="cate-btn" style="width: 200px; height: 200px; left:50%; top:50%; margin-left:-100px; margin-top:-100px; 
            text-align:center; position: absolute; 
            border: 1px solid lightgray; border-radius: 5px; box-shadow: 1px 1px 3px grey;">
                <img src="flag.png">
                <p><b>By country</b></p>
                <span>You can search for records by country.</span>
            </div>
            
            <div class="cate-btn" style="width: 200px; height: 200px; left:75%; top:50%; margin-left:-100px; margin-top:-100px; 
            text-align:center; position: absolute; 
            border: 1px solid lightgray; border-radius: 5px; box-shadow: 1px 1px 3px grey;">
                <img src="type.png">
                <p><b>By record type</b></p>
                <span>You can search for records by record type.</span>
            </div>
        
        </div>
    
    </header>
    <main class="list-main" style="height: 60vh;min-height: 200px;border-bottom: 1px solid gray;">
        <div class="all-main-outer-div" style="width : 100%; height : 100%; position: relative;">
            <div class="all-main-inner-div" style="width: 80%; height: 80%; left: 10%; top: 10%; position: absolute; text-align: center; overflow: auto;">
               <table style="width: 20%; left:40%; position: absolute;">
               <?php
                  while($row = mysqli_fetch_array($ret)) {
                     echo "<tr> <td>", $row['ani_title'], "</td> </tr>";
                  }   
               ?>
               </table>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-outer-div">
            <div class="footer-sns-div">
                <button class="sns-button" type="button" onclick="window.open('https://twitter.com/');"><img class="sns-button-img" src="/img/twitter.png"></button>
                <button class="sns-button" type="button" onclick="window.open('https://www.instagram.com/');"><img class="sns-button-img" src="/img/instagram.png"></button>
                <button class="sns-button" type="button" onclick="window.open('https://www.facebook.com/');"><img class="sns-button-img" src="/img/facebook.png"></button>
            </div>
            <div class="footer-text-div">
                ⓒ Copyright 2022
            </div>
        </div>
    </footer>
  </body>
</html>