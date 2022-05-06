<!DOCTYPE html>
<html>
  <head>

    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Museum price calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Museum price calculator</title>
    
  </head>
  <body>
    
    <script src="./js/script.js"></script>
    
    <?php echo "<h1>Museum price calculator</h1>" ?>
    
    <!-- Text fields for user input, collects data -->
    <h3>Enter the requested information into the textfield:</h3>
    <form action="./welcome.php" method="post" target="result">
       <input type="number" step="1" min="0" max="118" name="age" id="age" placeholder="Enter         age"><br><br>

      <!--drop down menu for day -->
      <label for="day">Select day:</label>

      <select name="day" id="day">
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
          <option value="Sunday">Sunday</option>
        </select>
        <br>
        <br>
        <br>
      
				<input type="submit" value="Check admission price">
		</form>
   

    <!-- result frame centered -->
    <div id="result"></div>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
    
  </body>
</html>