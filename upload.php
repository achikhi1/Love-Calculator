<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $base64Image = $_POST['image'];

    $base64Image = str_replace('data:image/png;base64,', '', $base64Image);

    $imageData = base64_decode($base64Image);

    $filename = 'love_image_' . uniqid() . '.png';

    $filePath = './uploads/' . $filename;

    file_put_contents($filePath, $imageData);

    echo json_encode(['filename' => $filename, 'filePath' => $filePath]);
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
