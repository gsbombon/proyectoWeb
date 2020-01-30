// JavaScript Document
  function Verifica_Captcha() {
    var response = grecaptcha.getResponse();

    if(response.length == 0){
      alert("Captcha no verificado")
    } else {
      alert("Captcha verificado");
    }
  }