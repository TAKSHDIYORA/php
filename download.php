<?php
// Include config file
require_once "config.php";

// Attempt select query execution
$sql = "SELECT * FROM files";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo "<thead>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>File Name</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['file_path'] . "</td>";
            echo "<td>";
			/* Generally, no PHP script is required to download a file with the extensions exe and zip. If the file location of this type of file is set in the href attribute of the anchor element, then the file automatically downloads when the user clicks on the download link. Some files, such as image files, PDF files, text files, CSV files, etc., do not download automatically, and instead, open in the browser when the user clicks on the download link. */
            echo "<a href='" . $row['file_path'] . "'>Download 1</a>";
            echo "&nbsp;";
			echo "<a href='download2.php?path=" . $row['file_path'] . "'>Download 2</a>";
            echo "&nbsp;";
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo '<em>No records were found.</em>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}

// Close connection
mysqli_close($link);
