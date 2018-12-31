// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      username: {
        required: true,
        minlength: 3,
        maxlength: 10,
        remote: {
          url: "mregcheck.php",
          type: "post",
          data: {
            username: function() {
              return $( "#username" ).val();
            }
          }
        }
      },

      fullname: {
        required: true,
      },
      profession: {
        required: true,
      },
      hsd: {
        required: true,
      },
      phone: {
        required: true,
      },
      address: {
        required: true,
      },
      cnt1: {
        required: true,
      },
      cnt1p: {
        required: true,
      },
      
    },
    // Specify validation error messages
    messages: {
      username: {
        remote: "Username already in use!"
      } ,    
      // fullname: "Please enter your fullname",
      // password: {
      //   required: "Please provide a password",
      //   minlength: "Your password must be at least 5 characters long"
      // },
      // email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });


// $.validator.addMethod(
//   "regex", function(value, element, regexp) {
//     var check = false;
//     var re = new RegExp(regexp);
//     return this.optional(element) || re.test(value);
//   },
//   ""
// );
// $("input[title='FileName']").rules(
//   "add",{
//     required: true,
//     regex:"^[a-oA-O'.\s]{1,40}$",
//     messages: {
//       regex: "<br />Please enter a value in the correct format.."
//     }
// });

  //username validation
  var $regexusername=/^([a-zA-Z0-9_]+)$/;
  $('#username').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexusername)) {
      // there is a mismatch, hence show the error message
      $('.unmsg').removeClass('hidden');
      $('.unmsg').show();
    }
    else{
      // else, do not display message
      $('.unmsg').addClass('hidden');
    }
  });


  //fullname validation
  var $regexfullname=/^([a-zA-Z\s]+)$/;
  $('#fullname').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexfullname)) {
      // there is a mismatch, hence show the error message
      $('.fnmsg').removeClass('hidden');
      $('.fnmsg').show();
    }
    else{
      // else, do not display message
      $('.fnmsg').addClass('hidden');
    }
  });

  //username validation
  var $regexfathersname=/^([a-zA-Z\s]+)$/;
  $('#fathersname').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexfathersname)) {
      // there is a mismatch, hence show the error message
      $('.fsnmsg').removeClass('hidden');
      $('.fsnmsg').show();
    }
    else{
      // else, do not display message
      $('.fsnmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexmothersname=/^([a-zA-Z\s]+)$/;
  $('#mothersname').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexmothersname)) {
      // there is a mismatch, hence show the error message
      $('.msnmsg').removeClass('hidden');
      $('.msnmsg').show();
    }
    else{
      // else, do not display message
      $('.msnmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexspousename=/^([a-zA-Z\s]+)$/;
  $('#spousename').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexspousename)) {
      // there is a mismatch, hence show the error message
      $('.snmsg').removeClass('hidden');
      $('.snmsg').show();
    }
    else{
      // else, do not display message
      $('.snmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexprofession=/^([a-zA-Z\s]+)$/;
  $('#profession').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexprofession)) {
      // there is a mismatch, hence show the error message
      $('.prnmsg').removeClass('hidden');
      $('.prnmsg').show();
    }
    else{
      // else, do not display message
      $('.prnmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexnational=/^((\d{10})|(\d{13}))$/;
  $('#national').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexnational)) {
      // there is a mismatch, hence show the error message
      $('.nidmsg').removeClass('hidden');
      $('.nidmsg').show();
    }
    else{
      // else, do not display message
      $('.nidmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexbirth=/^(\d+)$/;
  $('#birth').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexbirth)) {
      // there is a mismatch, hence show the error message
      $('.bcnmsg').removeClass('hidden');
      $('.bcnmsg').show();
    }
    else{
      // else, do not display message
      $('.bcnmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexphone=/^(01(5|6|7|8|9)\d{8})$/;
  $('#phone').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexphone)) {
      // there is a mismatch, hence show the error message
      $('.phnmsg').removeClass('hidden');
      $('.phnmsg').show();
    }
    else{
      // else, do not display message
      $('.phnmsg').addClass('hidden');
    }
  });


  //username validation
  var $regexcnt1=/^([a-zA-Z\s]+)$/;
  $('#cnt1').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexcnt1)) {
      // there is a mismatch, hence show the error message
      $('.cnnmsg').removeClass('hidden');
      $('.cnnmsg').show();
    }
    else{
      // else, do not display message
      $('.cnnmsg').addClass('hidden');
    }
  });  


  //username validation
  var $regexcnt1r=/^([a-zA-Z\s]+)$/;
  $('#cnt1r').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexcnt1r)) {
      // there is a mismatch, hence show the error message
      $('.cnrmsg').removeClass('hidden');
      $('.cnrmsg').show();
    }
    else{
      // else, do not display message
      $('.cnrmsg').addClass('hidden');
    }
  });  


  //username validation
  var $regexcnt1p=/^(01(5|6|7|8|9)\d{8})$/;
  $('#cnt1p').on('keypress keydown keyup',function(){
    if (!$(this).val().match($regexcnt1p)) {
      // there is a mismatch, hence show the error message
      $('.cnpmsg').removeClass('hidden');
      $('.cnpmsg').show();
    }
    else{
      // else, do not display message
      $('.cnpmsg').addClass('hidden');
    }
  });


});