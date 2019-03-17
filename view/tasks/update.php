<p>pas gegevens aan</p>
<fieldset>
<form action="<?=URL?>task/saveTaskUpdate" method="post">
   <label for="Name">task:</label>
    <input required type="text" name="task" placeholder="task beschrijving" value="<?=$task['task_name']?>">
     <input type="hidden" name="id" value="<?= $task['task_id'] ?>">
    <input type="submit" name="submit" value="opslaan">
</form>
</fieldset>