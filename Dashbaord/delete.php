<?php 
if(isset($_GET['delete_id'])){

    // Specify the file path
    $filePath = '../users.txt';
    $uniqueIdToDelete = $_GET['delete_id']; // Replace '123' with the unique ID you want to delete

    // Create an array to store the file's lines
    $fileLines = [];

    // Open the file for reading
    $file = fopen($filePath, 'r');

    if ($file) {
        // Read each line and store it in the array
        while (($line = fgets($file)) !== false) {
            $fileLines[] = $line;
        }

        // Close the file
        fclose($file);

        $deleted = false;

        // Open the file for writing
        $file = fopen($filePath, 'w');

        // Iterate through the lines and delete the one with the specified unique ID
        foreach ($fileLines as $line) {
            $parts = explode(',', $line);
            $currentUniqueId = trim(end($parts)); // Get the last part as the unique ID

            if ($currentUniqueId == $uniqueIdToDelete) {
                $deleted = true;
            } else {
                // Write the line back to the file if it doesn't match the unique ID
                fwrite($file, $line);
            }
        }

        // Close the file
        fclose($file);

        if ($deleted) {
            echo "Line with Unique ID $uniqueIdToDelete has been deleted from the file.";
            header("location:all-users.php");
        } else {
            echo "Line with Unique ID $uniqueIdToDelete was not found in the file.";
        }
    } else {
        echo "Failed to open the file.";
    }
}