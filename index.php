<?php

$animals = [
    'cat',
    'dog',
    'bunny',
    'turtle',
    'koala',
    'elefant',
    'hipo',
    'bird',
    'mamal'
];

function listWrapper($content){
    echo '<li>' . $content . '</li>';
}

echo '<ul>';

foreach($animals as $animal){
    listWrapper($animal);
}

echo '</ul>';




