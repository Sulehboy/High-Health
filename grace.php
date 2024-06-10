<?php
include 'dbconfig.php';
if (isset($_POST['search'])) {
    $search = 'query';

$query = isset($_GET['query']) ? $_GET['query'] : '';

if (!empty($query)) {
    try {
        // Step 3: Query the Database
        $sql = "SELECT * FROM medical_items WHERE name LIKE :query OR details LIKE :query";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['query' => '%' . $query . '%']);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Step 4: Display the Results
        if ($results) {
            echo "<h2>Search Results for '{$query}':</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Details</th>
                    </tr>";
            foreach ($results as $row) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['type']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['details']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No results found for '{$query}'.</p>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->posMessage();
    }
} else {
    echo "<p>Please enter a search query.</p>";
    header('location:search.php');
}

$conn = null;
}
?>








<!DOCTYPE html>
<html>
<head>
    <title>Search Medical Items</title>
</head>
<body>
    <h1>Search Medical Items</h1>
    <form action="" method="postt">
        <label for="query">Search:</label>
        <input type="text" id="query" name="query" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
