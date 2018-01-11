$(document).ready(function () {
    $("#visitor_email").blur(function () {
        var email = $("#visitor_email").val();
        if (email != '')
        {
            $.ajax({
                type: "POST",
                url: "check_email.php?id=" + email,
                success: function (result, string, jqXHR) {
                    if (result == 'go') {
                        $("#email_check").html("Available");
                        $("#check").attr('disabled', false);
                         var email = $("#visitor_email").val();
                         var re_email=$("#re_email").val();
                         if(email !=re_email){
		         $("#re_email_check").html("Email and confirm email not match!");
		         $("#check").attr('disabled', true);
		       }else{
		         $("#re_email_check").html("");
		         $("#check").attr('disabled', false);
		       }
                    } else {
                        $("#email_check").html("Email already exists!");
                        $("#check").attr('disabled', true);
                    }
                }
            });
        } 
    });
    $("#re_email").blur(function(){
       var email = $("#visitor_email").val();
       var re_email=$("#re_email").val();
       if(email !=re_email){
         $("#re_email_check").html("Email and confirm email not match!");
         $("#check").attr('disabled', true);
       }else{
         $("#re_email_check").html("");
         $("#check").attr('disabled', false);
       }
    });
});