
<?php include './inc/header.php' ?>

<style>
   .contentt {
        width:auto;
       
       position: absolute;
       top:40% ;
       left:450px;
      display:flex;
       flex-wrap: wrap;
     gap:30px;
       
       padding: 20px; 
    }

    .food {
        
      
       position: relative;
    
        margin: 10px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    }

    .food img {
        position: relative;
        display: block;
    left:0;
    top:0;
        width: 433px;
        height:204px;
        border-radius: 10px 10px 0 0;
    }

    .description {
        position: relative;
        bottom:0;
        left: 0;
        width: 433px;

        height:110px;
        background-color: #fff;
        border-radius: 0 0 10px 10px;
        border: 1px solid #ccc;
        box-shadow: 2px 3px 5px #ccc;
        padding: 10px;
        box-sizing: border-box;
    }

    .description span {
        display: inline;
        margin-bottom: 5px;
    }

    .description span b {
        font-size: 1.2em;
        
        
    }

    .description img {
        position:absolute;
       
        right:20px;
        width: 20px;
        height:18px;
        margin-right: 5px;
        vertical-align: middle;
    }

    .description a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .buy {
        position: absolute;
        bottom: 10px;
        right: 10px;
        padding: 6px 12px;
        background-color: #ea1f4d;
        text-decoration: none;
        color: white;
        border-radius: 10px;
        transition: background-color 0.3s ease; 
    }

    .buy:hover {
        background-color: #ff003d; 
    }
    .span5{
         
        
        position: absolute;
        right: 70px;
        bottom:10px;
    }
   .span4{
position:absolute;
bottom:0;
width:190px;
height: 20px;
   }
    .span18{
         position: absolute;
        bottom:0;
       top:40px;
    }
   
  .img2{
    position:absolute;
    left:0;
  }
  .astx{
    position:absolute;
    right:20px;
  }
</style>

</head>
<li><a  href="armf.php"><img src="./img/am.png" class="am" alt=""> AM</a></li>
 <li><a  href="engf.php"><img src="./img/en.png" alt="" class="ru"> EN</a></li>
 <li><a  href="rusf.php"><img src="./img/ru.png" alt="" class="ru"> RU</a></li>
</ul>
<script>
  let map = document.getElementById("map")
  function openMap(){
    map.classList.add("open-map")
  }
  function closeMap(){
    map.classList.remove("open-map")
  }
</script>

</div>
</div>
</div>
<img  id="img" src="./img/pastar.jpg"  >

<body>
<div class="contentt">
    <?php

    $foods = [
        ["name" => "Concept", "price" => "Minimum 3000֏", "rating" => 4.8, "time" => "10:00-23:59", "imgSrc" => "./img/img17.jpg"],
        ["name" => "Mayrig Yerevan", "price" => "Minimum 3000֏", "rating" => 4.7, "time" => "11:00-23:45", "imgSrc" => "./img/img18.jpg"],
        ["name" => "Paula ", "price" => "Minimum 3000֏", "rating" => 4.7, "time" => "11:00-00:40", "imgSrc" => "./img/img19.jpg"],
        ["name" => "Dragon Garden", "price" => "Minimum 3000֏", "rating" => 4.7, "time" => "10:00-23:00", "imgSrc" => "./img/img20.jpg"],
        ["name" => "Camancha Restaurant", "price" => "Minimum 3000֏", "rating" => 4.6, "time" => "11:00-02:00", "imgSrc" => "./img/img21.jpg"],
        ["name" => "Uptown", "price" => "Minimum 3000֏", "rating" => 4.8, "time" => "12:00-23:00", "imgSrc" => "./img/img22.jpg"],
        ["name" => "Beer Academy", "price" => "Minimum 3000֏", "rating" => 4.6, "time" => "10:15-04:00", "imgSrc" => "./img/img23.jpg"],
        ["name" => "Beijing", "price" => "Minimum 3000֏", "rating" => 4.7, "time" => "11:00-01:30", "imgSrc" => "./img/img24.jpg"],
        ["name" => "Sushi Boom!", "price" => "Minimum 3000֏", "rating" => 4.6, "time" => "10:00-02:00", "imgSrc" => "./img/img25.jpg"],
        ["name" => "In Yang Sushi Wok", "price" => "Minimum 3000֏", "rating" => 4.5, "time" => "11:00-02:00", "imgSrc" => "./img/img26.jpg"],
        ["name" => "Sushi Set", "price" => "Minimum 3000֏", "rating" => 4.6, "time" => "11:30-22:45", "imgSrc" => "./img/img27.jpg"],
        ["name" => "Educator 1", "price" => "Minimum 3000֏", "rating" => 4.5, "time" => "09:00-23:59", "imgSrc" => "./img/img28.jpg"],
        

    ];

    foreach ($foods as $index => $food) {
        echo '
        <div class="food">
            <img src="' . $food["imgSrc"] . '" class="img' . ($index + 1) . '">
            <div class="description">
                <span class="span3"><b>' . $food["name"] . '</b></span>
                <span class="span4">' . $food["price"] . '</span>
                <span class="span5"><b class ="astx">' . $food["rating"] . '</b>
                <img src="./img/star.webp" class="img2" alt=""></span>
                <span class="span18">' . $food["time"] . '</span>
                <span class= "buy"><a  href="./buy.php">Buy</a></span>
            </div>
        </div>';
    }
    ?>
    
</div>
<div class="menu">
<h2>filters</h2>

<span class="span1">



</span>
<span class="span2"><a class="free"
    href="food1.php">Free Delivery</a>
  </span>
  
    <span class="s1"><a class="pizza"
      href="pizza.php">Pizza</a></span>
  
      <span class="s2"><a class="xorovac"
        href="xorovac.php">BBQ and Kebab</a></span>
  
        <span class="s3"><a class="burger"
          href="burger.php">Бургер и Сэндвич</a></span>
  
          <span class="s4"><a class="shaurma"
            href="shaurma.php">Shawarma</a></span>
          
    
    
  

</div>

</body>

</html>

