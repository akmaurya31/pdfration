<?php 

// AWS_ACCESS_KEY_ID="AKIAVRUVUXHFXPCKVFE5"
// AWS_SECRET_ACCESS_KEY="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"
// AWS_REGION="us-west-1"
// S3_BUCKET_NAME="publicluxs3"
// BACEKND_URL = "https://be.luxyaragroup.io"


require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

if (isset($_FILES['pdfUpload']) && $_FILES['pdfUpload']['error'] == 0) {
    // Retrieve file details
    $pdfName = $_FILES['pdfUpload']['name'];
    $pdfTmpName = $_FILES['pdfUpload']['tmp_name'];
    $extension = pathinfo($pdfName, PATHINFO_EXTENSION);
    $newPdfName = 'pdf_' . uniqid() . '.' . $extension;

    // AWS S3 configuration
    $bucketName = 'publicluxs3';
    $key = 'luxyara/uploadcards/' . $newPdfName;  // Path in the S3 bucket
    $region = 'us-west-1'; // Your S3 bucket region
    $accessKey = 'AKIAVRUVUXHFXPCKVFE5';
    $secretKey = 'SU7eRTohUMxL5yB18CMy9tpd9R2zxMYXV1TmXaNk';

    // Create an S3 client
    $s3 = new S3Client([
        'region' => $region,
        'version' => 'latest',
        'credentials' => [
            'key' => $accessKey,
            'secret' => $secretKey,
        ],
    ]);

    try {
        // Upload the file to S3
        $result = $s3->putObject([
            'Bucket' => $bucketName,
            'Key' => $key,
            'SourceFile' => $pdfTmpName,  // Temporary file path
            'ACL' => 'public-read',  // Permissions for the file
            'ContentType' => mime_content_type($pdfTmpName),  // File MIME type
        ]);

        // The result contains details of the uploaded file
        echo "File uploaded successfully. S3 URL: " . $result['ObjectURL'];

    } catch (AwsException $e) {
        // Catch an S3 specific exception.
        echo "Error uploading file: " . $e->getMessage();
    }
} else {
    echo "No file uploaded or file upload error.";
}
?>