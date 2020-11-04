
$(document).ready(function () {
  

  $('#searchForm').on('submit',function (e) { 
    e.preventDefault();
    var loc = $('#input_location').val();
    var make = $('.make').val();
    var model = $('.model').val();
    var fuel = $('.fuel').val();
    location.href =loc+'/'+make+'/'+model+'/'+fuel;
   })

  window.onload=function () {
    render();
  };
  function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
      "recaptcha-container",
      {
        size: "invisible",
        callback: function(response) {
          phoneAuth()
        }
      }
    );
  }
  $('#contactForm').on('submit',function(event){
    event.preventDefault();
    phoneAuth();
    $('.otp_confirm').show();
  });
  function phoneAuth() {
      //get the number
      var county_code = $('#cunty_code').text();
      var phn=document.getElementById('contact_no').value;
      var number = county_code+phn;
      //phone number authentication function of firebase
      //it takes two parameter first one is number,,,second one is recaptcha
      firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
          //s is in lowercase
          window.confirmationResult=confirmationResult;
          coderesult=confirmationResult;
          console.log(coderesult);
          alert("Message sent");
      }).catch(function (error) {
          alert(error.message);
      });
  }
  function codeverify() {
      var code=document.getElementById('verificationCode').value;
      coderesult.confirm(code).then(function (result) {
          alert("Successfully registered");
          var user=result.user;
          var contact_name = $('#contact_name').val();
      var contact_no = $('#contact_no').val();
      $('contactForm').hide();
      $(".search_box2").html("<font color='green'>THanks For Contacting Us</font>");
      $('#get_submit').attr("disabled", true);
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url:'../public/send-mail',
        data:{contact_name:contact_name,contact_no:contact_no},
        success:function(resp){
          if(resp=="true"){
            
          }
          else{
  
          }
         
        },error:function(){
          alert("Error");
        }
      }); 

      }).catch(function (error) {
        $(".message").html("<font color='red'>Wrong OTP </font>");
      });

  }


   $("#fuel").on('keydown', function(e){
        e.preventDefault();
    });
    $("#main_search").on('keydown', function(e){
      e.preventDefault();
  });
    

  $('#car li').click(function (e) { 
    $(".ku").remove();
    var car_val = $(this).val();
    var car_text = $(this).text();
    $('.make').val(car_text);
    
    $.ajax({
      type:'get',
      url:'../public/select-car',
      data:{car_val:car_val},
      success:function(resp){
        var data = JSON.parse(resp);
        var i;
        for(i=0;i<data['data'].length;i++)
        {
          var model_val = data["data"][i]['id'];
          var model_name = data["data"][i]['model_name'];
          //html+ = `<li value="${model_val}" class=list-group-item> ${ model_name }</li>`;
          $("#model").append("<li value='"+model_val+"' class='ku list-group-item'>"+model_name+"</li>");
        }
       
      },error:function(){
        alert("Error");
      }
    }); 
  });

  $('#verifycode').on('click',function(){
    codeverify()
  });

  $('#fuel').click(function () { 
    var middle_input_text = $('#main_search').val(); 
    if(middle_input_text!=''){
      $(this).val('');
      $(this).hide();
      $('.fuel_search').show();
      $('.get_started').addClass("get_started_top");
  
      $('#fuel_list li').click(function () { 
        var location_val = $(this).val();
        var location_text = $(this).text();
        $('.fuel').val(location_text);
        $('#fuel').val(location_text);
        $('.fuel_search').hide();
        $('#fuel').show();
        $('.get_started').removeClass("get_started_top");
       });
    }
   
   });

   $(document).on("click", function (event) {
// If the target is not the container or a child of the container, then process
  // the click event for outside of the container.
  if ($(event.target).closest(".select_fuel_l").length === 0) {
    $('#fuel').show();
    $('.fuel_search').hide();
    $('.get_started').removeClass("get_started_top");
    console.log("You clicked outside of the container element");
  }
});



   
  $(document).on("click", function (event) {
// If the target is not the container or a child of the container, then process
  // the click event for outside of the container.
  if ($(event.target).closest("._b2").length === 0) {
    $('#input_location').show();
    $('.select_vechile').removeClass("select_vechile_top");
    console.log("You clicked outside of the container element");
  }
});


  $(document).on("click", function (event) {
// If the target is not the container or a child of the container, then process
  // the click event for outside of the container.
  if ($(event.target).closest(".select_vechile").length === 0) {
    $('#main_search').show();
    $('.select_car').hide();
    $('.select_model').hide();
    $('.select_fuel_l').removeClass("fuels");
    console.log("You clicked outside of the container element");
  }
});

  $('.car_battery').click(function () { 
    $('.req_call').removeClass("custom_req_call");
    $(this).addClass("car_battery");
    $('.car_battery').removeClass("custom_car_battery");
    $('.search_box1').show();
    $('.search_box2').hide();
    $('.req_text').hide();
    $('.battery_text').show();
   })

   $('.req_call').click(function () { 
    $(this).addClass("custom_req_call");
    $('.car_battery').addClass("custom_car_battery");
    $('.car_battery').removeClass("car_battery");
    $('.search_box2').show();
    $('.search_box1').hide();
    $('.req_text').show();
    $('.battery_text').hide();
    
   })



  //Search Jquery

    $('#main_search').click(function () {
      $('#fuel').val('');
          search();  
  });
  
  var search = function () { 
    
    $("#main_search").val("");
        $('#main_search').hide();
         $('.select_car').show();
         $('.select_fuel_l').addClass("fuels");
    $('#car li').click(function () {
      var car_val = $(this).val();
      var car_text = $(this).text();
     
        $('.select_car').hide();
        $('.select_model').show();

        $('#backb').click(function(){
          $('.select_car').hide();
          $('.select_model').hide();
         search();
        })

        $('#model').on('click','li',function () { 
        var model_val = $(this).val();
        var model_text = $(this).text();
        $('.model').val(model_text);
        if (model_val) {
          $('.select_car').hide();
          $('.select_model').hide();
          $('#main_search').show();
          $('.select_fuel_l').removeClass("fuels");
          var arr = [car_text,model_text];
          $("#main_search").val(arr.join(' '));  
        }
     });
      
    }); 
   };
    
   $('.select_location').on('keyup','#input_location',function () {
    if (event.keyCode === 8 || event.keyCode === 37|| event.keyCode === 39|| event.keyCode === 17|| event.keyCode === 65|| event.keyCode === 46) {
      // Do stuff... e.preventDefault()
  }
  else{
    var x,y,z;
    var itxt="";
    var store="";
    var a =[];
    var ifw = $('#input_location').val().toLowerCase();
    console.log(ifw);
    a.push(ifw);
    var ats = a.toString();
    for(x=0;x<=ats.length;x++){
      var fCheck = ats.charAt(x);
      itxt=itxt+fCheck;
    }
    
    $( "#location li" ).each( function( index, element ){
      var liItem = $( this ).text().toLowerCase().toString();
      store="";
      for(y=0;y<itxt.length;y++){
        var check = liItem.charAt(y);
        store=store+check;
      }
      if(itxt==store){
        var last="";
        var llen = liItem.length;
        var ilen = itxt.length;
        for(z=ilen;z<=llen;z++){
          last = last + liItem.charAt(z);
        }
        //console.log(last);
        $('#input_location').val($('#input_location').val() + last);
        
        var selector = $('#input_location');
        var carat = selector.val().length-1; 
        selector.focus(); 
        var strt = itxt.length;
        var end  = store.length;
        selector[0].setSelectionRange(strt,30);
        return false;

      }
      else{
        console.log('NO');
      }
      
      //console.log(store)
    });
  }
    
     
   });

   $('.select_location_b2').on('keyup','#input_location_b2',function () {
    if (event.keyCode === 8 || event.keyCode === 37|| event.keyCode === 39|| event.keyCode === 17|| event.keyCode === 65|| event.keyCode === 46) {
      // Do stuff... e.preventDefault()
  }
  else{
    var x,y,z;
    var itxt="";
    var store="";
    var a =[];
    var ifw = $(this).val().toLowerCase();
    a.push(ifw);
    var ats = a.toString();
    for(x=0;x<=ats.length;x++){
      var fCheck = ats.charAt(x);
      itxt=itxt+fCheck;
    }
    
    $( "#location_b2 li" ).each( function( index, element ){
      var liItem = $( this ).text().toLowerCase().toString();
      store="";
      for(y=0;y<itxt.length;y++){
        var check = liItem.charAt(y);
        store=store+check;
      }
      if(itxt==store){
        var last="";
        var llen = liItem.length;
        var ilen = itxt.length;
        for(z=ilen;z<=llen;z++){
          last = last + liItem.charAt(z);
        }
        //console.log(last);
        $('#input_location_b2').val($('#input_location_b2').val() + last);
        
        var selector = $('#input_location_b2');
        var carat = selector.val().length-1; 
        selector.focus(); 
        var strt = itxt.length;
        var end  = store.length;
        selector[0].setSelectionRange(strt,30);
        return false;

      }
      else{
        console.log('NO');
      }
      
      //console.log(store)
    });
  }
    
     
   });
/*    $("#location").on("keyup", '#car_input' , function () {
    var value = $(this).val().toLowerCase();
    $("#location li").filter(function () {
      var test = $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      console.log(test.text());
      
    });
  }); */

  $("#car").on("keyup", '#car_input' , function () {
    var value = $(this).val().toLowerCase();
    $("#car li").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $("#model").on("keyup", '#model_input' , function () {
    var value = $(this).val().toLowerCase();
    $("#model li").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $(".fuel_search").on("keyup", '#fuel_input' , function () {
    var value = $(this).val().toLowerCase();
    $(".fuel_search li").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
 
  $("#model").on("keyup",'model_input', function () {
    var value = $(this).val().toLowerCase();
    $("#model li").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});
