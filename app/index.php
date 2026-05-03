<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST['company'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    $sql = "INSERT INTO jobs (company, role, status) VALUES ('$company', '$role', '$status')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM jobs");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Application Tracker</title>
</head>
<body>

<h2>Job Application Tracker</h2>

<form method="POST">
    <input type="text" name="company" placeholder="Company Name" required>
    <input type="text" name="role" placeholder="Job Role" required>

    <select name="status">
        <option>Applied</option>
        <option>Interview</option>
        <option>Rejected</option>
        <option>Selected</option>
    </select>

    <button type="submit">Add</button>
</form>

<h3>Applications</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Role</th>
        <th>Status</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['company']; ?></td>
        <td><?php echo $row['role']; ?></td>
        <td><?php echo $row['status']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
