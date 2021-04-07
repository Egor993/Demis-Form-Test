<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Demis-form</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="template/css/style.css">
</head>

<body>
	<div>
		<header class="menu">     
			<nav>   
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/news">Новости</a></li>
				</ul>
			</nav>
		</header>
	</div>

	<div class="content clearfix">
		<h3 class="line">Последние новости</h3>
		<?php foreach($news as $val): ?>
			<div class="news">
				<img src="template/img/<?php echo $val['img'] ?>" class="img" alt="">
				<h4><?php echo $val['caption'] ?></h4>
				<p><?php echo $val['text'] ?></p>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="form">

		<div class ='caption'>
			<h4 class="line">Форма обратной связи</h4>
			<hr>
		</div>

		<form action="#" method="POST" id="form">
			<p><label>ФИО <input autofocus type="text" class="form-control" name ="fio" placeholder="Введите ФИО"></label></p>
			<p><label>Адрес <input type="location" class="form-control" name ="location" placeholder="Введите адрес"></label></p>
			<p><label>Телефон <input type="phone"  class="form-control" name ="phone" placeholder="Введите телефон"></label></p>
			<p><label>E-mail <input type="email" class="form-control" name ="email" placeholder="Введите e-mail"></label></p>
			<div class ="danger">
				<?php if (isset($errors)): ?>
						<ul class="alert alert-danger">
							<?php foreach ($errors as $error): ?>
								<li><?php echo $error;?></li>
							<?php endforeach;?>
						</ul>
				<?php endif; ?>
			</div>
			<p><input type="submit" value="Отправить" name="submit" class='btn'></p>
		</form>
	</div>

	<div class="table">
		<h4 class="line2">Введенные данные</h4>
		<table class="data">
		<tbody>
			<tr>
			<td><h5>ФИО</h5></td>
			<td><h5>Адрес</h5></td>
			<td><h5>Телефон</h5></td>
			<td><h5>E-mail</h5></td>
			<?php foreach($dataList as $val): ?>
				</tr>
				<tr>
				<td><?php echo $val['fio'];?>	
				</td>
				<td><?php echo $val['loc'];?>	
				</td>
				<td><?php echo $val['phone'];?>	
				</td>
				<td><?php echo $val['email'];?>	
				</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
	</div>
	
</body>
</html>