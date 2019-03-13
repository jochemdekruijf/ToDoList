<p>pas gegevens aan</p>
<fieldset>
<form action="<?=URL?>book/saveBoek" method="post">
   <label for="Name">boek:</label>
    <input required type="text" name="boek" placeholder="boek" value="<?=$list['book_name']?>">
     <input type="hidden" name="id" value="<?= $list['book_id'] ?>">
    <input type="submit" name="submit" value="opslaan">
</form>
</fieldset>