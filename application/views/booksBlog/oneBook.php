<?php
echo '<h2>'.$title.'</h2><br>';
echo '<h2>'.$book->getName().'</h2>';
echo '<h3>Book description:</h3>'.$book->getDescription();
echo '<h4>Book pages:</h4>'.$book->getPages().' страниц';
echo '<h4>Book price:</h4>'.$book->getPrice().' грн';
echo '<h4>Add book date:</h4>'.$book->getDate().'<br>';
echo '<br><a href="/deleteBook/'.$book->getId().'">Удалить книгу</a>';