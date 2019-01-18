function getMastersByProf(id) {
       
        $.ajax({
            url:     "/services", //url страницы 
            type:     "GET", //метод отправки
            dataType: "html", //формат данных
            data:{id:id},
            error: function(httpRequest){
                alert('ошибка');
                $("#data-content").html(httpRequest.responseText);
            },
            success: function(html){
                $("#data-content").html(html);
                
                },
            })
    }



   $('#editMaster').click(function(){
   var id = $(this).attr('id');
   alert(id);
  
}); 
    $("#editMaster").click(function(){
            var id = $(this).attr('id');
            alert(id);
            });	
     
$( document ).ready(function() {
    $("#btn-cancel").click(function(){
		alert();
$(".edit-form-"+id).css("display","block");
                $(".edit-"+id).css("display","none");	
	});
    });        
                 
function CancelEditUser(id){
   
    $(".edit-form-"+id).css("display","none");
    $(".edit-"+id).css("display","block");	
}
   
    
    
    

function EditMasterById(id) {
      
        $.ajax({
            url:     "/services?select=onchange.val=2", //url страницы 
            type:     "GET", //метод отправки
            dataType: "html", //формат данных
            data:{id_edit:id},
            error: function(httpRequest){
                alert('ошибка какая то');
                $("#master-form").html(httpRequest.responseText);
            },
            success: function(html){
                
                $(".edit-form-"+id).css("display","block");
                $(".edit-"+id).css("display","none");
              
                },
            })
    }


        
function validateForm() {
	$(".text-error").remove();
	
	// Проверка логина    
	var el_l    = $("#login2");
	if ( el_l.val().length < 4 ) {
	  var v_login = true;
	  el_l.after('<span class="text-error for-name">Имя должно быть больше 3 символов</span>');
	  $(".for-name").css({top: el_l.position().top + el_l.outerHeight() + 2,'color':'red'});
	} 
	$("#login2").toggleClass('error', v_login );
	
	// Проверка e-mail
	
	var reg     = /^\w+([\.-]?\w+)*@(((([a-z0-9]{2,})|([a-z0-9][-][a-z0-9]+))[\.][a-z0-9])|([a-z0-9]+[-]?))+[a-z0-9]+\.([a-z]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/i;
	var el_e    = $("#email2");
	var v_email = el_e.val()?false:true;
  
	if ( v_email ) {
	  el_e.after('<span class="text-error for-email">Поле e-mail обязательно к заполнению</span>');
	  $(".for-email").css({top: el_e.position().top + el_e.outerHeight() + 2,'color':'red'});
	  
	} else if ( !reg.test( el_e.val() ) ) {
	  v_email = true;
	  el_e.after('<span class="text-error for-email">Вы указали недопустимый e-mail</span>');
	  $(".for-email").css({top: el_e.position().top + el_e.outerHeight() + 2,'color':'red'});
	}
	$("#email2").toggleClass('error', v_email );
	
	
	// Проверка текста комментария    
	var text    = $("#text");
	if ( text.val().length < 1 ) {
	  var v_text = true;
	  text.after('<span class="text-error for-text">Запрещено пустое сообщение</span>');
	  $(".for-text").css({top: text.position().top + text.outerHeight() + 2,'color':'red'});
	} 
	$("#text").toggleClass('error', v_text );
	return (  v_email||v_login  );
}    
    
    
    function Reg() { //функция для регистрации во время авторизации
        $.ajax({
            url:     "auth/register.php", //url страницы 
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            error: function(httpRequest){
                $("#auth-div").html(httpRequest.responseText);
            },
            success: function(html){
                $("#auth-div").html(html).fadeIn(4000);
                },
            })
    }

    function Login() { //функция для регистрации во время авторизации
        $.ajax({
            url:     "auth/login.php", //url страницы 
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            error: function(httpRequest){
                $("#auth-div").html(httpRequest.responseText);
            },
            success: function(html){
                $("#auth-div").html(html).fadeIn(4000);
                },
            })
    }
    function RegUser() { //функция для регистрации во время авторизации
        $.ajax({
            url:     "auth/regUser.php", //url страницы 
            type:     "POST", //метод отправки
            data: $("#reg-form").serialize(),
            dataType: "html", //формат данных
            error: function(httpRequest){
                $("#reg-result").html(httpRequest.responseText);
            },
            success: function(html){
                $("#reg-result").html(html);
                },
            })
    }
    function Auth() { //функция для регистрации во время авторизации
      $.ajax({
            url:     "auth/auth.php", //url страницы 
            type:     "POST", //метод отправки
            data: $("#login-form").serialize(),
            //dataType: "html", //формат данных
            success: function(response){
                $("#auth-content").html(response); 
                    
                result = $.parseJSON(response);
                    if (result){
                        window.location.reload();
                       
                        }
                      
                    },
             })
    }

    function SinglePage(id) {
        $.ajax({
            url:     "single.php", //url страницы 
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: {id:id},
            error: function(httpRequest){
                $("#content").html(httpRequest.responseText);
            },
            success: function(html){
                $("#content").html(html);
                },
            })
    }







