<?php 

foreach ($pageData['masterByProf'] as $key => $value){ ?>
<div class="master-content">
    <p>Имя:&nbsp&nbsp<?php echo $value['name'] ?></p>
    <p>E-mail:&nbsp&nbsp<?php echo $value['email'] ?></p>
    <p>Телефон:&nbsp&nbsp<?php echo $value['phone'] ?></p>
    
</div> 
 <?php } ?>
    



