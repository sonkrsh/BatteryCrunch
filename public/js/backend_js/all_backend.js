$(document).ready(function(){
    function getAjax(urlk,data,data2,data3){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            type:'post',
            url:urlk,
            data:{input_data:data,input_data2:data2,input_data3:data3},
            success:function(resp){
                if(resp=='true'){
                    $('#make').val('');
                    $(".status").html("<font color='green'> Succesfull</font>");
                }
                else{
                    $(".status").html("<font color='red'>Eroor</font>");
                }
               
              },error:function(){
                alert("Error");
              }
        });
    }
    /* Make js */

    $('#make_form').on('submit',function(e){
        e.preventDefault();
        var data = $('#make').val();
        var urlk = '../admin/add-make';
        getAjax(urlk,data);
    });

    // Add Class
 $('.edit').click(function(){
    $(this).addClass('editMode');
   });
  
   // Save data
   $(".edit").focusout(function(){
    $(this).removeClass("editMode");
    var id = this.id;
    var split_id = id.split("_");
    var field_name = split_id[0];
    var edit_id = split_id[1];
    var value = $(this).text();
    var urlk = '../admin/edit-make';
    data = field_name;
    data2 = value;
    getAjax(urlk,data,data2)
 
   });

   /* End Make Js */


   /* Model Js */
   $('#model_form').on('submit',function(e){
    e.preventDefault();
    var data = $('.makeVal').val();
    var data2 = $('#model').val();
    urlk = '../admin/add-model';
   /*  console.log(data);
    console.log(data2); */
    getAjax(urlk,data,data2)
    /* var urlk = '../admin/add-make';
    getAjax(urlk,data); */
});

$('.edit2').click(function(){
    $(this).addClass('editMode');
   });
  
   // Save data
   $(".edit2").focusout(function(){
    $(this).removeClass("editMode");
    var id = this.id;
    var split_id = id.split("_");
    var field_name = split_id[0];
    var edit_id = split_id[1];
    var value = $(this).text();
    var urlk = '../admin/edit-model';
    data = field_name;
    data2 = value;
    getAjax(urlk,data,data2)
 
});

$('#fuel_form').on('submit',function(e){
    e.preventDefault();
    var data = $('#fuel').val();
    urlk = '../admin/add-fuel';
    getAjax(urlk,data)
    location.reload();
});

$('#slt_make').change(function(){ 
    var e = document.getElementById("slt_make");
    var slt_val = e.options[e.selectedIndex].value;
    /* var slt_val = $(this).val(); */
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        type:'post',
        url:'../admin/battery-product',
        data:{input_data:slt_val},
        success:function(resp){
            var i;
            $('.rem').remove();
             for(i=0;i<resp.length;i++){
                var id = resp[i]['id'];
                var model_name = resp[i]['model_name'];
                $(".jquery_append").append("<option class='rem' value="+id+">"+model_name+"</option>");
            /*     console.log(id);
                console.log(model_name); */
             }
           
          },error:function(){
            alert("Error");
          }
    });
});

});