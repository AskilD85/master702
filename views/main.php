<?php require('/template/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            
             
       <div class="form-group">      
           <form role="form">
               <label for="menu">Менюшка</label>
            
            <select class='menu-select form-control' onchange='getMastersByProf($(this).val())'><option disabled selected>Выберите услугу</option>
            
            <?php foreach ($pageData['servicesTable'] as $key => $value){ ?>
                <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></option>
            <?php }?>
             </select>
               
             </div>
        </form>
        </div>
        <div id="data-content" class="col-md-9 data-content">
            
             <h3>Почему он используется?</h3>
 <p>
     
Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. 
Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение
шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается
при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." 
Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в
сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. 
За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по
ошибке, некоторые - намеренно (например, юмористические варианты).
</p>
        </div>
       
    </div>
</div>
       
<?php require('/template/footer.php');?>      





