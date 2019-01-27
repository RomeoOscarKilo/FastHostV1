function EaseCookieMan() {

  var allcookie = document.cookie;
  cookiearray = allcookie.split(';');
  for (var i = 0; i < cookiearray.length; i++) {
    value = cookiearray[i].split('=')[1];
  }
  var now = new Date();
  now.setMonth(now.getMonth() + 12);
  if (value == "0") {
    document.cookie = "EOA=1;" + "expires=" + now.toUTCString() + ";" + "path=/;"
    // document.cookie = "Fart=1" This would set another new cookie with Fart
  } else if (value == "1") {
    document.cookie = "EOA=0;" + "expires=" + now.toUTCString() + ";" + "path=/;"
  } else {
    document.cookie = "EOA=1;" + "expires=" + now.toUTCString() + ";" + "path=/;"
  }
  document.location.reload(true)
}
