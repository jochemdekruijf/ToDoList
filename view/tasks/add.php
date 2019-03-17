 <h3>Voeg lijst</h3>
<fieldset>
<form action="<?=URL?>task/saveTask" method="post">
   
   <input required type="hidden" name="id">	
   <label for="Name">Task:</label> <input required type="text" name="task" placeholder="task beschrijving">
   <input type="submit" name="submit" value="opslaan">
    <br>
</form>
</fieldset>