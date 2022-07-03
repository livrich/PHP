<!-- Requirements:
- Menu with options
- Add item (name and quantity)
- Remove item
- View items
 -->


<!DOCTYPE html>
<html>
<body>

<h1>Shopping List</h1>

<?php
// function startMenu() {
//     echo "";
//     echo "1. Add Item\n";
//     echo "2. Remove Item\n";
//     echo "3. View Items\n";
//     echo "4. Done/Exit\n";
// }

$item_name = array();
$name_length = count($item_name);

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
        echo $name;

        $item_name = array_push($item_name, $name);

        echo $item_name;
        
    } else if ($choice == 2) {
        // Remove item
    } else if ($choice == 3) {
        // View items
        for ($x = 0; $x < $name_length; $x++) {
            echo $item_name[$x];
            echo "<br>";
        }
    } else if ($choice == 4) {
        // Exit program
        exit("Goodbye!");
    } else {
        // Error, invalid input
        echo "<br>";
        echo "Error, invalid input. Please try again.";
        echo "<br>";
    }
    
}

?>


</body>
</html>