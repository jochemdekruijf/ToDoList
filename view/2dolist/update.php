<p>pas gegevens aan</p>
<fieldset>
<form action="<?=URL?>student/saveList" method="post">
   <label for="Name">Lijstnaam:</label>
    <input required type="text" name="list_name" placeholder="lijstnaam" value="<?=$list['list_name']?>">
     <input type="hidden" name="id" value="<?= $list['list_id'] ?>">
    <input type="submit" name="submit" value="opslaan">
</form>
</fieldset>