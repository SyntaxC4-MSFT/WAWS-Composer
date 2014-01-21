<?php

require_once "../bin/vendor/autoload.php";

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;

$blobRestProxy = ServicesBuilder::getInstance()->createBlobService(getEnv('CUSTOMCONNSTR_BlobConnectionString'));

try {
    // List blobs.
    $blob_list = $blobRestProxy->listBlobs("training-kit");
    $blobs = $blob_list->getBlobs();

    foreach($blobs as $blob)
    {
        echo $blob->getName().": ".$blob->getUrl()."<br />";
    }
} catch(ServiceException $e){
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}
