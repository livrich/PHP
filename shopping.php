<!DOCTYPE html>
<html>
<body>

<h1>Shopping List</h1>

<?php
// I can't figure out why it is so angry
// with this function.
// function startMenu() {
//     echo "";
//     echo "1. Add Item\n";
//     echo "2. Remove Item\n";
//     echo "3. View Items\n";
//     echo "4. Done/Exit\n";
// }

$array = array();
$name_length = count($array);

$choice = 0;

while ($choice != 4) {
    // startMenu();
    echo "1. Add Item\n";
    echo "2. Remove Item\n";
    echo "3. View Items\n";
    echo "4. Done/Exit\n";
    $choice = readline("Select an option (1-4): ");
    
    if ($choice == 1) {
        // Add item
        $name = readline("Name of item: ");
        $array[] = $name;

    } else if ($choice == 2) {
        // Remove item
        $what = readline("What item number do you want to remove? ");
        unset($array[$what]);

    } else if ($choice == 3) {
        // View items
        // Right now, the loop makes it so the array won't display
        // for ($x = 0; $x < $name_length; $x++) {
        echo "\n";
        echo "Shopping List\n";
        echo "<pre>";
        print_r($array);
        echo "</pre>\n";
        echo "\n";
            // echo "($x + 1) $item_name[$x]";
            // echo "<br>";
        // }

    } else if ($choice == 4) {
        // Exit program
        echo "Goodbye!";
        exit();

    } else {
        // Error, invalid input
        echo "";
        echo "\nError, invalid input. Please try again.\n";
        echo "\n";
    }
}
?>

</body>
</html>