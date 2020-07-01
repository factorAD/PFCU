/* detects if enter key is pressed in pw field and runs login function */

$(document).ready(function(){
    $('#password').keypress(function(e){
      if(e.keyCode==13)
      $('#login').click();
    });
});
