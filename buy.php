<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Պատվիրիր ամենօրյա սնունդը</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon"
href="./img/logo.png">
</head>

<body>


    <div class="containe">
        <div class="out">
<a class=" exit" href="home.php" >Դուրս գալ</a>
        </div>
        <div id="card">
            <div class="card-inner">
                <div class="front">

                    <div class="row">
                        
                        <img src="./img/chip.png" width="60px" alt="">
                        <img src="./img/visa.png" width="80px" alt="">
                    </div>
                    <div class="row cardn">
                        <p class="number" placeholder="####" type="text">#### #### #### #### </p>

                    </div>
                    <div class="row card-hold">
                        <p>ՔԱՐՏԱՊԱՆ</p>
                        <p>ԳՈՐԾՈՒՄ Է ՄԻՆՉԵՎ</p>
                    </div>
                    <div class="row name">
                        <p class="named">Mikle-Jackson</p>
                        <p class="data">00/24</p>
                    </div>
                </div>
                <div class="back">
                    <div class="bard"></div>
                    <div class="row cvv">
                        <div>
                            <img src="./img/pattern.png">
                        </div>
                        <p class="cvvp">***</p>
                    </div>
                    <div class="row signature">
                        <img class="dd" src="./img/visa.png" width="80px">
                    </div>
                 
                </div>
            </div>
            <div>
              
        </div>
    </div>
    <script>

        const cvv = document.querySelector(".cvvp");
        const num = document.querySelector(".number")
        const data = document.querySelector(".data")
        const name = document.querySelector(".named")
        const enter = document.querySelector(".enter")
        const cvvp = document.querySelector(".cvvp")

        cvv.addEventListener("click", function () {

            const userInput = +prompt("Գրեք ձեր cvv֊ի եռանիշ կոդը");
            if (userInput) {

                cvv.innerHTML =  userInput ;
            }


        });
        num.addEventListener("click", function () {
            const userInput = +prompt("Գրեք ձեր քարտի 12 թվերը");;
            if (userInput) {
                num.innerText = userInput;
            }




        });
        data.addEventListener("click", function () {

            const userInput = +prompt("Գրեք ձեր քարտի ժամկետը օրինակ՝ 00/24");
            if (userInput) {
                data.innerText = userInput;
            }


        });
        name.addEventListener("click", function () {

            const userInput = prompt("Գրեք ձեր քարտի սեփականատիրոջ անուն ազգանունը");
            if (userInput) {
                name.innerHTML = userInput;
            }


        });
       name.addEventListener("click", function(){
           
       })
     
const cardf = document.getElementById("card");


card.addEventListener("click", function() {
    if (name.innerText !== "Mikle-Jackson" && data.innerText !== "00/24" && num.innerText !== "#### #### #### ####" ) {
        cardf.classList.add("next");
            
        }else{
            card.classList.remove("next"); 
        }
  if( cvvp.innerText !== "***" && name.innerText !== "Mikle-Jackson" && data.innerText !== "00/24" && num.innerText !== "#### #### #### ####"){
      alert(" Վերջ դուք լրացրեցիք  ձեր քարտի տվյալները:")
  }
});






    </script>
</body>

</html>