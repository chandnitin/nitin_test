$(document).ready(function(){
    $flag=1;
    $("#myName").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_name").text("* You have to enter your full name!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_name").text("");

        }
   });
    $("#password").focusout(function () {
        if ($(this).val() == '') {
            $(this).css("border-color", "#FF0000");
            $('#submit').attr('disabled', true);
            $("#error_password").text("* You have to enter your password!");
        }
        else {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled', false);
            $("#error_password").text("");

        }

    });

   
    $("#email").focusout(function(){
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        $email =$("#email").val();
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_email").text("* You have to enter your email!");
        }else if(!regex.test($email)) {
            $('#submit').attr('disabled',true);
            $("#error_email").text("* Please enter correct email!!");
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_email").text("");
        }
   });

    $("#pincode").focusout(function(){
        $pin =$("#pincode").val();
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_pincode").text("* You have to enter your Date of Birth!");
        }else if(!$.isNumeric($pin))
        {
                $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_pincode").text("* Pin code Should Be Numeric");  
        }
        else
        {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_pincode").text("");
        }
   });
    $("#gender").focusout(function(){
        $(this).css("border-color", "#2eb82e");
   
   });
    $("#age").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_age").text("* You have to enter your Age!");
        }
        else
        {
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_age").text("");

        }
        });
    $("#phone").focusout(function(){
        $pho =$("#phone").val();
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_phone").text("* You have to enter your Phone Number!");
        }
        else if ($pho.length!=10)
        {   
                $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        }
        else if(!$.isNumeric($pho))
        {
                $(this).css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                $("#error_phone").text("* Phone Number Should Be Numeric");  
        }
        else{
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_phone").text("");
        }

    });

       $( "#submit" ).click(function() {
           if($("#myName" ).val()=='')
           {
            $("#myName").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_name").text("* You have to enter your first name!");
        }
        if($("#email" ).val()=='')
           {
            $("#email").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_email").text("* You have to enter your Last name!");
        }
           if($("#dob" ).val()=='')
           {
            $("#dob").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_dob").text("* You have to enter your Date of Birth!");
        }
           if($("#age" ).val()=='')
           {
            $("#age").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_age").text("* You have to enter your Age!");
        }
        if($("#phone" ).val()=='')
           {
            $("#phone").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_phone").text("* You have to enter your Phone Number!");
        }
        });


    
});