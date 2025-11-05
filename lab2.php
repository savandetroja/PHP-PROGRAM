<?php
$event_name = "Christmas";
$event_date = "2025-12-25";

$today = new DateTime();
$event = new DateTime($event_date);
$interval = $today->diff($event);

if ($interval->invert == 1) {
    echo "The event \"$event_name\" on $event_date has already passed.";
} else {
    echo "Days remaining until $event_name: " . $interval->days ." Days";
}
?>
