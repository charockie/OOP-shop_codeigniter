<?php
echo '<h2>'.$title.'</h2><br>';
foreach($books as $book)
{
    echo '<br>Book name: <a href="/book/'.$book->getId().'">'.$book->getName().'</a>';
    echo '<br>Book pages: '.$book->getPages().' страниц';
    echo '<br>Book price: '.$book->getPrice().' грн';
    echo '<br>Add book date: '.$book->getDate().'<br>';
}