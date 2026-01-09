<?php
$conn = mysqli_connect("localhost", "root", "", "test_db");

$search = $_POST['search'];

$sql = "SELECT * FROM users 
        WHERE first_name LIKE '%$search%' 
        OR last_name LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='result-item'>
                {$row['first_name']} {$row['last_name']}
              </div>";
    }
} else {
    echo "<div class='result-item'>No results found</div>";
}
?>
