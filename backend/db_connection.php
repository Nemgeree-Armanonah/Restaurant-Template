<?php
    // create connection to the database
    $localserer = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = 'Afghan';

    $conn = mysqli_connect($localserer, $username, $password, $databasename);
    if (mysqli_connect_errno()) {

        echo 'Error'. mysqli_connect_error();
        exit();
    }
    else {
        $query = "SELECT * FROM food";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {     {
            $row = mysqli_fetch_array($result);

        mysqli_close($conn);
    }
}
}

?>
