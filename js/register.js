function valid() {
 var name = document.forms["myform"]["username"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 var email = document.forms["myform"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 } 
 var pwd = document.forms["myform"]["password"].value;
 if(pwd==""){
 alert("Please enter the password");
 return false;
 }
 var pwd1 = document.forms["myform"]["password2"].value;
 if(pwd1==""){
 alert("Please enter the coniform password");
 return false;
 }
 if(pwd.length < 8) {  
      alert("password size must contain 8 or more");
     return false;  
  }  
   
  if(pwd.length > 15) {  
      alert("password size must contain less than 16 ");
     return false;  
  }   
 if(pwd!=pwd1){
 alert("entered password and confirm password are not same")
 return false;
}
 
}
