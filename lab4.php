<?php
function plugin_one() {
    echo "Plugin One executed.<br>";
}

if (function_exists('plugin_one')) {
    plugin_one();
}

if (function_exists('plugin_two')) {
    plugin_two();
} else {
    echo "plugin_two does not exist.<br>";
}

function plugin_two() {
    echo "Plugin Two executed.<br>";
}

if (function_exists('plugin_two')) {
    plugin_two();
}
?>
