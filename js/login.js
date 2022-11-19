function validate() {
 var name = document.forms["myform1"]["username"].value;
 if(name==""){
 alert("Please enter the username ");
 return false;
 }
 var pwd = document.forms["myform1"]["password"].value;
 if(pwd==""){
 alert("Please enter the password");
 return false;
 }
}