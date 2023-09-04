<?php 
session_start();
if(isset($_SESSION['$UserName'])){

} 
else{
		header('location:../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 

include "Header.php"
?>
<?php 
include "menu.php"
?>   

<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">You are here: <a href="index.php">Home</a></p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article" style="text-align: center;">
                <h1> <?php echo "Welcome back ". $_SESSION['$UserName'], "!"  ?> </h1>
                
              <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="design/Home.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Profile.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/jobSeeker.jpeg" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="index.php"><strong>Home</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="User.php"><strong>User</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="ManageJob.php"><strong>Manage JobSeeker</strong></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><img src="design/employee.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/news.jpeg" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/FeedBack.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="ManageEmployer.php"><strong>Manage Employer</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="News.php"><strong>News</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="FeedBack.php"><strong>FeedBack</strong></a></div></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

<?php
include "right.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->

</body>
</html>
