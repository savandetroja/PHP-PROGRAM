<?php
$inventory = [
    "apple" => 50,
    "banana" => 30,
    "orange" => 20,
    "mango" => 15,
    "grapes" => 40
];

function check_inventory($item, $inventory) {
    $item = strtolower($item);
    if (array_key_exists($item, $inventory)) {
        return "Stock for '$item': " . $inventory[$item];
    } else {
        return "Item '$item' not found in inventory.";
    }
}

function total_items($inventory) {
    return array_sum($inventory);
}

$item_to_check = "Mango";
echo check_inventory($item_to_check, $inventory) . "<br>";
echo "Total items in inventory: " . total_items($inventory);
?>
