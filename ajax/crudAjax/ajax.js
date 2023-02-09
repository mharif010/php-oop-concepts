$('#submit').on('click',function(){
            
    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.ajax({
        method: "POST",
        data:{name:name,email:email,pass:pass},
        url : "./crudAjax/insert.php",
        success:function(data){
            $("#showData").html(data);
        }
    });
    
});