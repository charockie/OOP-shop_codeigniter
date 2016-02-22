<?php
echo '<h2>'.$title.'</h2><br>';
foreach($films as $film)
{
    echo '<br>Film name: <a href="/film/'.$film->getId().'">'.$film->getName().'</a>';
    echo '<br>Film price: '.$film->getPrice().' грн';
    echo '<br>Add film date: '.$film->getDate().'<br>';
}