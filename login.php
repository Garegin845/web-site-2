<!DOCTYPE html>
<html lang="en">
<head>


    <title>Պատվիրիր ամենօրյա սնունդը</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="https://play-lh.googleusercontent.com/uCXcUQm7NKpbZtbg88d6K9bBLHSYIDNhjTBJdSrKfKtN6pga18kkPcE23SdTOSP64ew">
</head>
<body>
   <div class="login">
    <img src="https://menu.am/images/sign-in-up.png" alt="">
    <img class="logol" src="https://play-lh.googleusercontent.com/uCXcUQm7NKpbZtbg88d6K9bBLHSYIDNhjTBJdSrKfKtN6pga18kkPcE23SdTOSP64ew" alt="">
  <h2 class="h2log">Մուտք</h2>
  <h3>Դեռ չունե՞ք հաշիվ</h3>
  <ul class="reg">
    <li ><a class="registr" href="re.php"><b>Գրանցվել</b></a></li>

  </ul>
</div>
<div id="login">
    <form action="post"><input class="email" type="email" name="Email" placeholder="Էլեկտրոնային հասցե"><br>
        <input class="input" type="password" name="Password" placeholder="Մուտքագրեք ձեր Գաղտնաբառը"><br>
        <button class="button" type="submit">Մուտք <a class="a" href="home.php"></a></button><br></form>
    
</div>
               
   <script>
    
    document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector(".button");
    const input = document.querySelector(".input");
    const inputemail = document.querySelector(".email");

    button.addEventListener('click', function(event) {
        event.preventDefault();

        if (input.value === "" || inputemail.value === "" ) {
            alert("Դուք չեք մուտքագրել գաղտնաբառը կամ  էլ֊Փոստը");
        } else {
            window.location.href = "home.php";
        }
    });
});

    
  
   </script>
</body>
</html>