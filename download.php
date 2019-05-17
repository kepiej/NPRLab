<?php
 $Down=$_GET['Down'];
?>

<html>
 <head>
  <meta http-equiv="refresh" content="0;url=<?php echo $Down; ?>">
 </head>
 <body>

 <?php

  $filePath = 'count.txt';

  // If file exists, read current count from it, otherwise, initialize it to 0
  $count = file_exists($filePath) ? file_get_contents($filePath) : 0;

  // Increment the count and overwrite the file, writing the new value
  file_put_contents($filePath, ++$count);

  // Display current download count
  echo "Your download should start shortly. Total number of downloads: " . $count;
 ?> 

 </body>
</html>