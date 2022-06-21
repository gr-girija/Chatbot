<!DOCTYPE html>
<html >
<head>
    <title>GEU CHATBOT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="c.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <style>
body {
  background-image: url('a.jpg'), url('c.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-position: right center;
  background-size: cover;
  background-blend-mode: screen;
}
</style>
</head>
<body>

    <div class="wrapper">
        <div class="title">Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                    <br>
                    <p>Please type in any of the following keywords: </p>
                    <br>
                    <p>*ABOUT GEU * * NIRF RANKING * * NAAC GRADE *</p>
                    <br>
                    <p>*360 TOUR *   * COURSES OFFERED *   * FEE *</p>
                    <br>
                    <p>*ACADEMICS * * CALENDAR 2020 * * ALUMNI *</p>
                    <br>
                    <p>*PLACEMENTS * * DIGITAL LIBRARY * * CLUBS*</p>
                    <br>
                    <p>*EVENTS & FESTS * * HOSTEL FACILITIES *</p>
                    <br>
                    <p>*SCHOLARSHIPS * * MORE *</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script>
var input = document.getElementById("data");
input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("send-btn").click();
    }
});
</script>
<div class="input-data">

<a href="invalid.php"><input type="button" id="invalid_btn" value=" Invalid "style="color:#ffffff; padding: 12px 28px ; background-color:#e61010; border-radius: 10px; border: 2px solid white;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php"><input type="button" id="logout_btn" value=" Log Out " style="color:#ffffff; padding: 12px 28px ; background-color:#e61010; border-radius: 10px; border: 2px solid white;"/></a>
</div>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>
