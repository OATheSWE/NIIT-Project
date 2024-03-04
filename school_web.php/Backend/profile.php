<?php
$user_id = 123; // id is supposed to be retrieved from session
$sql = "SELECT * FROM profiles WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$profile = $stmt->fetch();

if ($profile) {
    $name = $profile['Name'];
    $email = $profile['email'];
} else {
    // Handle case where profile is not found
    $name = "N/A";
    $email = "N/A";
}
?>