function validateForm(){
  var  response;
  var age = document.forms["Registration"]["age"].value
  if(isNaN(age) || age <16 || age > 100){
    response = "Age is invalid";
    document.getElementById("error").innerHTML=response;
    return false;}
  var password , passwordc;
  password = document.forms["Registration"]["password"].value;
  passwordc = document.forms["Registration"]["passwordc"].value;
  if( password == passwordc){}else {
    response = "Passwords did not match";
    document.getElementById("error").innerHTML=response;
    return false;}                                                           // check after to make sure user pass is corrected
  password = document.forms["Registration"]["password"].value; //include some client side forced secuirty to prevent user error
  if (password.length < 5){
    response = "Password is too short";
    document.getElementById("error").innerHTML=response;
    return false;}
    username = document.forms["Registration"]["username"].value; //no 2 letter usernames
    if (username.length < 3 || username.length > 20 ){
      response = "Username is too short";
      document.getElementById("error").innerHTML=response;
      return false;}}
