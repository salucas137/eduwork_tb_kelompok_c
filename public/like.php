<?php
require_once("../admin/dbconnect.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['liked'])) {
    if (isset($_POST['liked'])) {
        $filmid = $_POST['movieid'];
        $result = mysqli_query($conn, "SELECT * FROM film WHERE id_film = $filmid");
        $row = mysqli_fetch_array($result);
        $n = $row['likes'];

        // Get the user's ID from the session
        if (isset($_SESSION['id'])) {
            $userid = $_SESSION['id'];

            // Fetch the user's information from the database based on the ID
            $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $userid");
            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }
            $row = mysqli_fetch_assoc($result);

            // Check if the user's information is retrieved successfully
            if ($row) {
                $userid = $row['id'];

                // Proceed with the rest of your code using $userid
                // Check if the user has already liked the film
                $likedResult = mysqli_query($conn, "SELECT * FROM likes WHERE user_id = $userid AND film_id = $filmid");
                if (mysqli_num_rows($likedResult) == 0) {
                    mysqli_query($conn, "INSERT INTO likes (user_id, film_id) VALUES ($userid, $filmid)");
                    mysqli_query($conn, "UPDATE film SET likes = $n+1 WHERE id_film = $filmid");
                    echo $n + 1;
                } else {
                    echo $n;
                }

                exit();
            }
        }
    }
} elseif (isset($_POST['unliked'])) {
    // Code for when the user unlikes the film...
    $film_id = $_POST['movieid'];
    $result = mysqli_query($conn, "SELECT * FROM film WHERE id_film = $film_id");
    $row = mysqli_fetch_array($result);
    $n = $row['likes'];

    // Get the user's ID from the session
    $userid = $_SESSION['id'];

    if (!empty($userid)) {
        // Fetch the user's information from the database based on the ID
        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $userid");
        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                $userid = $row['id'];

                if ($n > 0) {
                    mysqli_query($conn, "DELETE FROM likes WHERE film_id = $film_id AND user_id = $userid");
                    mysqli_query($conn, "UPDATE film SET likes = GREATEST($n-1, 0) WHERE id_film = $film_id");
                    echo $n - 1;
                } else {
                    echo $n;
                }

                exit();
            }
        }
    }

    // If the user information is not found or user is not logged in, simply exit the script without displaying any message
    exit();
} else {
    // Handle other cases or display an appropriate message
    exit();
}
?>