<?php
if (isset($_POST["login"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $depart = $_POST["depart"];
    $password = $_POST["password"];

    if (!empty($name) && !empty($email) && !empty($depart) && !empty($password)) {
        $link = mysqli_connect("localhost", "root", "", "hi");

        if ($link == false) {
            die(mysqli_connect_error());
        }

        // Prepare the SQL statement
        $sql = "INSERT INTO Patients_details (pnt_name, pnt_email, pnt_depart, pnt_password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $sql);

        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $depart, $password);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Record inserted successfully";
        } else {
            echo "Something went wrong: " . mysqli_stmt_error($stmt);
        }

        // Close the statement and the connection
        mysqli_stmt_close($stmt);
        mysqli_close($link);

    } else {
        echo "Please provide all the information";
    }
}
?>