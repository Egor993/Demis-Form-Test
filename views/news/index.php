<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Demis-form</title>
    
    <link rel="stylesheet" href="template/css/style.css">

</head>
<body>

<header class="menu">     
	<nav>   
	    <ul>
	    	<li><a href="/">Главная</a></li>
	        <li><a href="/news">Новости</a></li>
	    </ul>
	</nav>
</header>
<hr>
<?php foreach($news as $val): ?>
<div class="container">
      <img src="template/img/<?php echo $val['img'] ?>" alt="">
      <h4><?php echo $val['caption'] ?></h4>
        <p>
          <?php echo $val['text'] ?>
        </p>
      </div>
  </div>
<hr>
<?php endforeach; ?>


</html>