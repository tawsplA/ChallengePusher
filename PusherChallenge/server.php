<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "4f7e8d9bddf2f869af46", // Replace with 'key' from dashboard
    "2338ab8663e9d892d698", // Replace with 'secret' from dashboard
    "1558457", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
    $pusher->trigger('price-btcusd', 'new-price', array(
        'value' => rand(0, 7000)
    ));
    sleep(1);
}
