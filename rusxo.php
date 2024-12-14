
<?php include './inc/header.php' ?>

<style>
    .contentt {
        width:1500px;
       
        position: absolute;
        top:30% ;
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
<body>
<li><a  href="armxo.php"><img src="./img/am.png" class="am" alt=""> AM</a></li>
 <li><a  href="engxo.php"><img src="./img/en.png" alt="" class="ru"> EN</a></li>
 <li><a  href="rusxo.php"><img src="./img/ru.png" alt="" class="ru"> RU</a></li>
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

<div class="contentt">
    <?php

    $foods = [
        ["name" => "33 Пиццаз Туманян", "price" => "Минимум 2000֏", "rating" => 4.8, "time" => "10:00-23:59", "imgSrc" => "./img/img42.jpg"],
        ["name" => "Бум Фуд", "price" => "Минимум 2000֏", "rating" => 4.7, "time" => "11:00-23:45", "imgSrc" => "./img/img43.jpg"],
        ["name" => "Даймонд Ресторан", "price" => "Минимум 2000֏", "rating" => 4.7, "time" => "11:00-00:40", "imgSrc" => "./img/img44.jpg"],
        ["name" => "Карас Абовян 1/1", "price" => "Минимум 2000֏", "rating" => 4.7, "time" => "10:00-23:00", "imgSrc" => "./img/img45.jpg"],
        ["name" => "Туманян шаурма Бюзанд", "price" => "Минимум 2000֏", "rating" => 4.6, "time" => "11:00-02:00", "imgSrc" => "./img/img46.jpg"],
        ["name" => "Мр. Гирос Амирян", "price" => "Минимум 2000֏", "rating" => 4.8, "time" => "12:00-23:00", "imgSrc" => "./img/img47.jpg"],
        ["name" => "Скуэар Уан энд Синнабон", "price" => "Минимум 2000֏", "rating" => 4.6, "time" => "10:15-04:00", "imgSrc" => "./img/img48.jpg"],
        ["name" => "Кофишоп Компни Ин Эриванци", "price" => "Минимум 2000֏", "rating" => 4.7, "time" => "11:00-01:30", "imgSrc" => "./img/img49.jpg"],
        ["name" => "Блек Ангус Абовян ", "price" => "Минимум 2000֏", "rating" => 4.6, "time" => "10:00-02:00", "imgSrc" => "./img/img50.jpg"],
        ["name" => "Таук", "price" => "Минимум 2000֏", "rating" => 4.5, "time" => "11:00-02:00", "imgSrc" => "./img/img51.jpg"],
        ["name" => " Библос ", "price" => "Минимум 2000֏", "rating" => 4.6, "time" => "11:30-22:45", "imgSrc" => "./img/img52.jpg"],
        ["name" => "Луи Шарден", "price" => "Минимум 2000֏", "rating" => 4.5, "time" => "09:00-23:59", "imgSrc" => "./img/img53.jpg"],
       

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
                <span class= "buy"><a  href="./buy.php">Купить</a></span>
            </div>
        </div>';
    }
    ?>
    
</div>
<div class="menu">
<h2>фильтры</h2>

<span class="span1">



</span>
<span class="span2"><a class="free"
    href="food1.php">Бесплат. Доставка</a>
  </span>
  
    <span class="s1"><a class="pizza"
      href="pizza.php">Пицца</a></span>
  
      <span class="s2"><a class="xorovac"
        href="xorovac.php">Шашлык и кебаб</a></span>
  
        <span class="s3"><a class="burger"
          href="burger.php">Бургер и Сэндвич</a></span>
  
          <span class="s4"><a class="shaurma"
            href="shaurma.php">Шаурма</a></span>
          
  

</div>

</body>

</html>
