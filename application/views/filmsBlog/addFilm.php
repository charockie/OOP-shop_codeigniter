<?php echo '<h2>'.$title.'</h2>'; ?>
<form id="add_form" action="newFilm" method="post">
    <br><input name="name" type="text" size="14" value="name" /><br>
    <br><input name="price" type="text" size="14" value="price" /><br>
    <br><textarea name="description" cols="34" rows="5">Введите описание нового фильма</textarea><br>
    <input type="submit" value="Создать"/>
</form>