<!doctype html> 
<html lang="en">
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>Search App</title>
  
    <?php include("../inc/header.php") ?>
    
    <h1><span>Wikipedia Search Engine</span></h1>

   
</div>

<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">
    
       <form id="searchForm">
            <input id="searchInput" type="text" autocomplete="off">
            <button for="search">Search</button>
       </form>
       
       <div id="resultsList"></div>
        


        
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
</div>
   
   
<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>