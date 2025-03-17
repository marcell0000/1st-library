<?php
include '../classes/User.php';
include '../classes/Post.php';
include '../classes/Admin.php';
include '../classes/Guest.php';
include '../classes/ImagePost.php';
include '../classes/VideoPost.php';

$userObj = new User();
$adminObj = new Admin();
$guestObj = new Guest();

// Untuk tes, kita akan menetapkan data pengguna dan memanggil metode yang di-override
$userObj->setUserData(1, 'John Doe', 'john@example.com');
$adminObj->setUserData(2, 'Jane Admin', 'admin@example.com');
$guestObj->setUserData(3, 'Guest User', 'guest@example.com');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna dan Postingan</title>
</head>
<body>
    <h2>Daftar Pengguna dan Postingan</h2>

    <h3>Pengguna Biasa:</h3>
    <p><?php echo $userObj->getName(); ?> (<?php echo $userObj->getEmail(); ?>)</p>

    <h3>Admin:</h3>
    <p><?php echo $adminObj->getName(); ?> (<?php echo $adminObj->getEmail(); ?>)</p>

    <h3>Guest:</h3>
    <p><?php echo $guestObj->getName(); ?> (<?php echo $guestObj->getEmail(); ?>)</p>

    <!-- Menampilkan Postingan -->
    <?php
    $postObj = new Post();
    $posts = $postObj->getPostsByUser(1);
    while ($postRow = $posts->fetch_assoc()) {
        $postObj->setPostData($postRow['id'], $postRow['user_id'], $postRow['title'], $postRow['content']);
        echo "<strong>{$postObj->getTitle()}</strong>: {$postObj->getContent()}<br>";
    }
    ?>

    <!-- Menampilkan Postingan Khusus -->
    <h3>Postingan Khusus:</h3>
    <?php
    $imagePost = new ImagePost();
    $imagePost->setPostData(1, 1, 'Image Post', 'images/Screenshot (25).png');
    $videoPost = new VideoPost();
    $videoPost->setPostData(2, 1, 'Video Post', 'videos/post1.mp4');
    ?>

    <p><?php echo $imagePost->getTitle(); ?>: <?php echo $imagePost->getContent(); ?></p>
    <p><?php echo $videoPost->getTitle(); ?>: <?php echo $videoPost->getContent(); ?></p>
</body>
</html>
