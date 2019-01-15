$(document).ready(function(){

	$("#form-signin").submit(function(e){
		e.preventDefault();//прибиваем событие браузера по умолчанию при нажатии на submit
        
		var login = $.trim($("#login").val());//убираем пробелы
        var password = $.trim($("#password").val());
       

        if(login == '' || password == '') {
			$("img.profile-img").attr("src", "/images/user-error.png");
		} else {
			$("img.profile-img").attr("src", "/images/user-ok.png");
			$(this).unbind().submit();
		}

	});


});

