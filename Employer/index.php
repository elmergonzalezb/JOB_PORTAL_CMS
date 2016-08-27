<?php
if(!isset($_SESSION))
{session_start();}

if(!isset($_SESSION['employer']))
{
	echo '<script type="text/javascript">alert("Session expired, please login again");window.location=\'../index.php\';</script>';
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="30" />
    
    <title>JOB PORTAL</title>
    
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
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
            <p id="breadcrumbs">&nbsp;</p>
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
            <div class="article">
                <h2><span><a href="#">Welcome To Control Panel</a></span></h2>
               

                <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="design/Home.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Profile.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Search.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="index.php"><strong>Home</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Profile.php"><strong>Profile</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="ManageJob.php"><strong>Manage JOB</strong></a></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><img src="design/Interview.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Feedback.png" alt="" width="64" height="64" /></div></td>
                    <td><div align="center"><img src="design/Log.png" alt="" width="64" height="64" /></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="ManageWalkin.php"><strong>Walkin</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="Application.php"><strong>Application</strong></a></div></td>
                    <td bgcolor="#A0B9F3"><div align="center"><a href="logout.php"><strong>Logout</strong></a></div></td>
                  </tr>
                </table>
                <p>&nbsp;</p>

              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->



    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer.php"
?>
</div> <!-- /main -->
<script type="text/javascript">

window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "job-navbar" + " job-card-2" + " job-animate-top" + " job-white";
    } else {
        navbar.className = navbar.className.replace(" job-card-2 job-animate-top job-white", "");
    }
}
</script>

</body>
</html>
