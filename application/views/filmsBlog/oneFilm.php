<?php
echo '<h2>'.$title.'</h2><br>';
echo '<h2>'.$film->getName().'</h2>';
echo '<h3>Film description:</h3>'.$film->getDescription();
echo '<h4>Film price:</h4>'.$film->getPrice().' грн';
echo '<h4>Add film date:</h4>'.$film->getDate().'<br>';
echo '<br><a href="/deleteFilm/'.$film->getId().'">Удалить фильм</a>';