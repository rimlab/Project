<form method="POST" name="form_update" action="showPlanning.php">
   <input type="hidden" name="lineDate" value="<?php echo $lineDate;?>" />
    <input type="hidden" name="label" value="<?php echo $label;?>" />
    <input type="hidden" name="teacher" value="<?php echo $teacher;?>" />
    
    Date : <input type="text" name="Date" value="<?php echo $_POST['lineDate'];?>" />
    Label : <input type="text" name="Label" value="<?php echo $_POST['label'] ?>"/>
    Formateur : <input type="text" name="Teacher" value="<?php echo $_POST['teacher']; ?>" />

    <input type="submit" value="Mettre a jour" name="mettreAJour"/>
</form>



