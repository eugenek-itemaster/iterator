<?php
require_once 'MyIterator.php';

$iterator = new MyIterator();
foreach ($iterator as $value) {
    echo "current - " . $value . PHP_EOL;
    echo "previous - " . $iterator->prev() . PHP_EOL;
    echo "---------" . PHP_EOL;
}