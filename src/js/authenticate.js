var xhttp = new XMLHttpRequest();

function registerSubmit(e){
    var data = $("#registerForm").serialize();
    $.ajax({
        type : 'POST',
        url : '../src/php/register_process.php',
        data : data,
        success : function(response) {
            var res = JSON.parse(response);
            alert(res["message"]);
            if(res["status"] == 200){
                $('#registerForm')[0].reset();
            }
        }
    });
    e.preventDefault();
}

  

function loginSubmit(e){
  var url = "../src/php/login_process.php";
  var data = $("#loginForm").serialize();
  var urlData = url+"?"+data;
  xhttp.open("GET", urlData, true);
  xhttp.send();
  xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
          var res = JSON.parse(this.responseText);
          if(res["status"] == 200){
              $('#loginForm')[0].reset();
              window.location.replace('../public/index.php'); //replaces the current location
              //window.location = '../public/home.php'; //navigates to another location
          }else{
              alert(res["message"]);
          }
      }
  };
  e.preventDefault();
}

function logoutSubmit() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            // Redirect to the login page or any other desired page
            window.location.href = "login.php";
        }
    };
    xhttp.open("GET", "../src/php/logout_process.php", true);
    xhttp.send();
}
function openPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}
