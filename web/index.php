<?php

require_once "../vendor/autoload.php";

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;

$blobRestProxy = ServicesBuilder::getInstance()->createBlobService(getEnv('CUSTOMCONNSTR_BlobConnectionString'));
?>
<html>
  <head>
    <title>Show me the Contents!!!</title>
    <link rel="stylesheet" href="site.css" type="text/css" />
  </head>
  <body>
    <h1>Show me the Contents!!!</h1>
    
<?php
try {
    // List blobs.
    $blob_list = $blobRestProxy->listBlobs(getenv('container'));
    $blobs = $blob_list->getBlobs();

	echo "<ul>";
    foreach($blobs as $blob)
    {
        echo "<li><a href='".$blob->getUrl()."'>".$blob->getName()."</a></li>";
    }
	echo "</ul>";
	
} catch(ServiceException $e){
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}

?>

  </body>
</html>