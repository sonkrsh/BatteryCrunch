$(document).ready(function(){
    $('#admin_login').on('submit',function (e) { 
        e.preventDefault();
        var coupan = $('#coupan_txt').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            type:'post',
            url:'../public/admin/verify',
            data:{coupan:coupan},
            success:function(resp){
                if(resp=='true'){
                    window.location.href = "http://localhost:81/BatteryCrunch/public/admin/dashboard";
                }
                else{
                    $(".status").html("<font color='red'>Wrong Otp</font>");
                }
               
              },error:function(){
                alert("Error");
              }
        });
        
     });
});
