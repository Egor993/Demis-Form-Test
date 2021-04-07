<?php

class FormController {

	public function actionIndex() {
		$errors = [];
		$dataList = Form::getData();
		$news = News::getlast();
		if (isset($_POST['submit'])) {

			if(($_POST['fio'] != '') and (strlen($_POST['fio'])) < 50) {
				$fio = strip_tags($_POST['fio']);
			}

			else if($_POST['fio'] == '' ) {
				$errors[] = 'Вы не ввели ФИО';
			}
			else {
				$errors[] = 'Кол-во символов в ФИО слишком большое';
			}

			if($_POST['location'] != '') {
				$loc = strip_tags($_POST['location']);
			}
			
			else {
				$errors[] = 'Вы не ввели адрес';	
			}

			if(($_POST['phone'] != '') and (preg_match('/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/', $_POST['phone']))) {
				$phone = strip_tags($_POST['phone']);
			}
			
			else if($_POST['phone'] == '') {
				$errors[] = 'Вы не ввели номер телефона';	
			}

			else {
				$errors[] = 'Телефон введен некорректно';
			}

			if(($_POST['email'] != '') and (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $_POST['email']))) {
				$email = strip_tags($_POST['email']);
			}
			
			else if ($_POST['email'] == '')  {
				$errors[] = 'Вы не ввели e-mail';	
			}

			else {
				$errors[] = 'Вы ввели некорректный e-mail';	
			}
			if ($errors == false) {
				$result = Form::addData($fio, $loc, $phone, $email);
				header("Location: /");
			}
		}

		require_once(ROOT . '/views/form/index.php');

		return true;
		
	}

}
