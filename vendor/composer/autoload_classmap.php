<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'OSS\\Core\\MimeTypes' => $baseDir . '/OSS/Core/MimeTypes.php',
    'OSS\\Core\\OssException' => $baseDir . '/OSS/Core/OssException.php',
    'OSS\\Core\\OssUtil' => $baseDir . '/OSS/Core/OssUtil.php',
    'OSS\\Http\\RequestCore' => $baseDir . '/OSS/Http/RequestCore.php',
    'OSS\\Http\\RequestCore_Exception' => $baseDir . '/OSS/Http/RequestCore_Exception.php',
    'OSS\\Http\\ResponseCore' => $baseDir . '/OSS/Http/ResponseCore.php',
    'OSS\\Model\\BucketInfo' => $baseDir . '/OSS/Model/BucketInfo.php',
    'OSS\\Model\\BucketListInfo' => $baseDir . '/OSS/Model/BucketListInfo.php',
    'OSS\\Model\\CnameConfig' => $baseDir . '/OSS/Model/CnameConfig.php',
    'OSS\\Model\\CorsConfig' => $baseDir . '/OSS/Model/CorsConfig.php',
    'OSS\\Model\\CorsRule' => $baseDir . '/OSS/Model/CorsRule.php',
    'OSS\\Model\\LifecycleAction' => $baseDir . '/OSS/Model/LifecycleAction.php',
    'OSS\\Model\\LifecycleConfig' => $baseDir . '/OSS/Model/LifecycleConfig.php',
    'OSS\\Model\\LifecycleRule' => $baseDir . '/OSS/Model/LifecycleRule.php',
    'OSS\\Model\\ListMultipartUploadInfo' => $baseDir . '/OSS/Model/ListMultipartUploadInfo.php',
    'OSS\\Model\\ListPartsInfo' => $baseDir . '/OSS/Model/ListPartsInfo.php',
    'OSS\\Model\\LoggingConfig' => $baseDir . '/OSS/Model/LoggingConfig.php',
    'OSS\\Model\\ObjectInfo' => $baseDir . '/OSS/Model/ObjectInfo.php',
    'OSS\\Model\\ObjectListInfo' => $baseDir . '/OSS/Model/ObjectListInfo.php',
    'OSS\\Model\\PartInfo' => $baseDir . '/OSS/Model/PartInfo.php',
    'OSS\\Model\\PrefixInfo' => $baseDir . '/OSS/Model/PrefixInfo.php',
    'OSS\\Model\\RefererConfig' => $baseDir . '/OSS/Model/RefererConfig.php',
    'OSS\\Model\\UploadInfo' => $baseDir . '/OSS/Model/UploadInfo.php',
    'OSS\\Model\\WebsiteConfig' => $baseDir . '/OSS/Model/WebsiteConfig.php',
    'OSS\\Model\\XmlConfig' => $baseDir . '/OSS/Model/XmlConfig.php',
    'OSS\\OssClient' => $baseDir . '/OSS/OssClient.php',
    'OSS\\Result\\AclResult' => $baseDir . '/OSS/Result/AclResult.php',
    'OSS\\Result\\BodyResult' => $baseDir . '/OSS/Result/BodyResult.php',
    'OSS\\Result\\ExistResult' => $baseDir . '/OSS/Result/ExistResult.php',
    'OSS\\Result\\GetCnameResult' => $baseDir . '/OSS/Result/GetCnameResult.php',
    'OSS\\Result\\GetCorsResult' => $baseDir . '/OSS/Result/GetCorsResult.php',
    'OSS\\Result\\GetLifecycleResult' => $baseDir . '/OSS/Result/GetLifecycleResult.php',
    'OSS\\Result\\GetLoggingResult' => $baseDir . '/OSS/Result/GetLoggingResult.php',
    'OSS\\Result\\GetRefererResult' => $baseDir . '/OSS/Result/GetRefererResult.php',
    'OSS\\Result\\GetWebsiteResult' => $baseDir . '/OSS/Result/GetWebsiteResult.php',
    'OSS\\Result\\HeaderResult' => $baseDir . '/OSS/Result/HeaderResult.php',
    'OSS\\Result\\InitiateMultipartUploadResult' => $baseDir . '/OSS/Result/InitiateMultipartUploadResult.php',
    'OSS\\Result\\ListBucketsResult' => $baseDir . '/OSS/Result/ListBucketsResult.php',
    'OSS\\Result\\ListMultipartUploadResult' => $baseDir . '/OSS/Result/ListMultipartUploadResult.php',
    'OSS\\Result\\ListObjectsResult' => $baseDir . '/OSS/Result/ListObjectsResult.php',
    'OSS\\Result\\ListPartsResult' => $baseDir . '/OSS/Result/ListPartsResult.php',
    'OSS\\Result\\PutSetDeleteResult' => $baseDir . '/OSS/Result/PutSetDeleteResult.php',
    'OSS\\Result\\Result' => $baseDir . '/OSS/Result/Result.php',
    'OSS\\Result\\UploadPartResult' => $baseDir . '/OSS/Result/UploadPartResult.php',
    'Qiniu\\Auth' => $baseDir . '/Qiniu/Auth.php',
    'Qiniu\\Config' => $baseDir . '/Qiniu/Config.php',
    'Qiniu\\Etag' => $baseDir . '/Qiniu/Etag.php',
    'Qiniu\\Http\\Client' => $baseDir . '/Qiniu/Http/Client.php',
    'Qiniu\\Http\\Error' => $baseDir . '/Qiniu/Http/Error.php',
    'Qiniu\\Http\\Request' => $baseDir . '/Qiniu/Http/Request.php',
    'Qiniu\\Http\\Response' => $baseDir . '/Qiniu/Http/Response.php',
    'Qiniu\\Processing\\Operation' => $baseDir . '/Qiniu/Processing/Operation.php',
    'Qiniu\\Processing\\PersistentFop' => $baseDir . '/Qiniu/Processing/PersistentFop.php',
    'Qiniu\\Storage\\BucketManager' => $baseDir . '/Qiniu/Storage/BucketManager.php',
    'Qiniu\\Storage\\FormUploader' => $baseDir . '/Qiniu/Storage/FormUploader.php',
    'Qiniu\\Storage\\ResumeUploader' => $baseDir . '/Qiniu/Storage/ResumeUploader.php',
    'Qiniu\\Storage\\UploadManager' => $baseDir . '/Qiniu/Storage/UploadManager.php',
    'Qiniu\\Zone' => $baseDir . '/Qiniu/Zone.php',
    'controllers\\Common\\Image' => $baseDir . '/controllers/Common/Image.php',
    'controllers\\Log\\Tlog' => $baseDir . '/controllers/Log/Tlog.php',
    'controllersref\\Image\\Image' => $baseDir . '/controllersref/Image/Image.php',
    'library\\AliOSS' => $baseDir . '/library/AliOSS.php',
    'library\\Auth\\Auth' => $baseDir . '/library/Auth/Auth.php',
    'library\\Core\\Log\\Log' => $baseDir . '/library/Core/Log/Log.php',
    'library\\Core\\RpcClient\\RpcClient' => $baseDir . '/library/Core/RpcClient/RpcClient.php',
    'library\\FastDfs' => $baseDir . '/library/FastDfs.php',
    'library\\Image\\Driver\\GIF' => $baseDir . '/library/Image/Driver/GIF.php',
    'library\\Image\\Driver\\GIFDecoder' => $baseDir . '/library/Image/Driver/GIF.php',
    'library\\Image\\Driver\\GIFEncoder' => $baseDir . '/library/Image/Driver/GIF.php',
    'library\\Image\\Driver\\Gd' => $baseDir . '/library/Image/Driver/Gd.php',
    'library\\Image\\Driver\\Imagick' => $baseDir . '/library/Image/Driver/Imagick.php',
    'library\\Image\\GetImage' => $baseDir . '/library/Image/GetImage.php',
    'library\\Image\\Image' => $baseDir . '/library/Image/Image.php',
    'library\\Qiniu' => $baseDir . '/library/Qiniu.php',
    'library\\UploadImage' => $baseDir . '/library/UploadImage.php',
);
