   


    function getMastersByProf(id) {
        
        $.post({
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







