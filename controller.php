
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_murid");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $box = [];
    while ( $isi = mysqli_fetch_assoc($result)) {
        $box[] = $isi;
    }
    return $box;
}

function insert($data) {
    global $conn;
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $message = htmlspecialchars($data["message"]);
    $submit = htmlspecialchars($data["submit"]);
    $query = "INSERT INTO pesan
    VALUES 
    ('', '$name', '$email', '$message', '$submit' ) 
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>