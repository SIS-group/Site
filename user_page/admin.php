<?php 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welocme Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/sidepanel.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<style type="text/css">
		.sidebar a {
  			display: block;
  			color: black;
  			padding: 15%;
  			text-decoration: none;
  			text-align: center;
		}
    .split{width: 50%;position: fixed;z-index: 1;}
    .left{background-color: green;left: 10;}
    .right{background-color: white;right: 0;left:10;}
    body{font-family: 'Raleway', sans-serif;}

    .masonry-brick {
      color: #FFF;
      background-color: #FF00D8;
      display: inline-block;
      padding: 5px;
      width: 100%;
      margin: 1em 0; /* for separating masonry-bricks vertically*/
}

@media only screen and (min-width: 480px) {
    .masonry-container {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}

@media only screen and (min-width: 768px) {
    .masonry-container {
        -moz-column-count: 4;
        -webkit-column-count: 4;
        column-count: 4;
    }
}

@media only screen and (min-width: 960px) {
    .masonry-container {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}
    
	</style>
</head>
<body>
	<div class="sidebar">
  		<a class="active" href="">Analyze System Performance</a>
  		<a href=" ./Admin/manage_accounts.php ">Manage User Accounts</a>
  		<a href=" ">Troubleshoot</a>
  		<a href="./admin/account_setting.php">Account setting</a>
  		<a href="../login/logout.php" style="all:unset ; "><button style="margin-top: 40%;margin-left: 25%">Log out</button></a>
	</div>

	<div class="content">
    <div class="masonry-container">
        <div class="masonry-brick">
          Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 
        </div>
        <div class="masonry-brick">
          Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 
        </div>
        <div class="masonry-brick">
          Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 
        </div>
        <div class="masonry-brick">
          Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 Masonry pure CSS3 
        </div>

    </div>
  </div>

  		
	</div>
</body>
</html>