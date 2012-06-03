<?php
  $id = $_GET['id'];
  try{
    
    $mongodb = new Mongo();
    $articleCollection = $mongodb->myblogsite->articles;
  } catch (MongoConnectionException $e) {
    die('Failed to connect to MongoDB '.$e->getMessage());
  }
  $articleCollection->remove(array('_id' => new MongoId($id)));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"  
  lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;  
      charset=utf-8"/>
      <link rel="stylesheet" href="css/style.css"/>
      <title>Blog Post Creator</title>
  </head>
  <body>
    <div id="contentarea">
      <div id="innercontentarea">
        <h1>Blog Post Creator</h1>
        <p>Article deleted. _id: <?php echo $id;?>.
          <a href="dashboard.php">Go back to dashboard?</a>
        </p>
      </div>
    </div>
  </body>
</html>