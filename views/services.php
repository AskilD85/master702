<?php 

echo '<h2>'.$pageData['service']['name'].'</h2>';


foreach ($pageData['masterByProf'] as $key => $value){ ?>
<div class="master-content " id="master-form-<?php echo $value['id'] ?>">
    <div class="edit-<?php echo $value['id'] ?>">
        <?php echo ServicesController::EditForm($value['id'],$value['name']);?>  
     
    <p>Имя:&nbsp&nbsp<?php echo $value['name'] ?></p>
    <p>E-mail:&nbsp&nbsp<?php echo $value['email'] ?></p>
    <p>Телефон:&nbsp&nbsp<?php echo $value['phone'] ?></p>
        
    </div>
    
    
    <form method="GET" class="edit-form edit-form-<?php echo $value['id'] ?>"   >
           <?php if(!empty($pageData['error'])) :?>
                        <p><?php echo $pageData['error']; ?></p>
                    <?php endif; ?>
        <input type="text" name="editName" value="<?php echo $value['name'] ?>" required>
        <input type="tel" name="editTel" value="<?php echo $value['phone'] ?>" required>
        <input type="email" name="editEmail" required value="<?php echo $value['email'] ?>">
        <input type="hidden" name="id" value="<?php echo $value['id']?>">
        <input type="submit"  name="editSubmit" id="editMaster" value="Сохранить" >
        <input type="button"  name="cancel" id="btn-cancel" value="Отменить"  onclick="CancelEditUser(<?php echo $value['id'] ?>)">
    </form>
</div> 
 <?php } ?>
