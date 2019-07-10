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
    echo '<li>' . $content . '.</li>';
}
?>

<h1>My List of Animals</h1>
<ul>
<? foreach($animas as $animal) : ?>
    <li><?= $animal ?></li>
<? endforeach ?>
</ul>





