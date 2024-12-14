<!DOCTYPE html>
<html lang="hy">
<head>
<meta >

    <title>Պատվիրիր ամենօրյա սնունդը</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="https://play-lh.googleusercontent.com/uCXcUQm7NKpbZtbg88d6K9bBLHSYIDNhjTBJdSrKfKtN6pga18kkPcE23SdTOSP64ew">
</head>
<body>
   <div class="login">
    <img src="https://menu.am/images/sign-in-up.png" alt="">
    <img class="logore" src="https://play-lh.googleusercontent.com/uCXcUQm7NKpbZtbg88d6K9bBLHSYIDNhjTBJdSrKfKtN6pga18kkPcE23SdTOSP64ew" alt="">
  <h2 class="h2re">Գրանցում</h2>
<h3>Արդեն գրանցվա՞ծ եք</h3>
  <ul class="reg">
    <li ><a class="log" href="login.php"><b>Մուտք</b></a></li>

  </ul>
</div>
<div id="login">
    <form action="post"><input type="email" name="Email" placeholder="Էլեկտրոնային հասցե"><br>
        <input type="password" name="Password" placeholder=" Մուտքագրեք ձեր Գաղտնաբառը"><br>
        <input type="password" name="Password" placeholder="Հաստատեք ձեր գաղտնաբառը"><br>
        <input type="number" name="Number" placeholder="Հեռախոսահամար"><br>
        <button type="submit">Գրանցվել <a class="a" href="home.php"></a></button><br></form>
</div>
               
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector("button[type='submit']");
    const inputs = document.querySelectorAll("input");

    button.addEventListener('click', function(event) {
      event.preventDefault();

      let isg = true;
      inputs.forEach(function(input) {
        if (input.value.trim() === "") {
          isg = false;
          return;
        }
      });

      if (!isg) {
        alert("Դուք չեք լրացրել բոլոր դաշտերը");
      } else {
        window.location.href = "home.php";
      }
    });
  });
</script>


  


</body>
</html>