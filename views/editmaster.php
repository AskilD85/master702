<div class="master-content" >
    
    <form>
        Name:<input type="text" name="name" value="<?php echo $array['master_id']; ?>" ><br />
        Phone:<input type="tel" name="phone" ><br />
        Text:<input type="text" name="text" ><br />
    
        <input type="submit" name="saveEdit" value="Сохранить" >
        <input type="submit" name="CancelEdit" value="Отмена" >
        
    </form>   
    
    
<?php var_dump($_REQUEST); echo 'блина'.$_POST['id']; var_dump($pageData['EditMaster']);?>
    

</div>