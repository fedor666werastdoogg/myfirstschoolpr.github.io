<?php
<!DOCTYPE html>
<html>

<head>
  <title>Form</title>
  <link href='reg.css' rel='stylesheet' type='text/css'>
</head>

<body>
    	<form method='post' class='reg-form'>

		<div class='form-row'>
			<label for='form_fname'>Имя: </label>
    		<input type='text' id='form_fname' name='first_name'>
  		</div>

  		<div class='form-row'>
    		<label for='form_sname'>Фамилия: </label>
    		<input type='text' id='form_sname' name='second_name'>
		</div>

		<div class='form-row'>
			<label for='form_email'>Email: </label>
			<input type='email' id='form_email' name='email'>
		</div>

		<div class='form-row'>
			<label for='form_phone'>Телефон: </label>
			<input type='text' id='form_phone' name='phone'>
		</div>

		<div class='form-row'>
			<label for='form_about'>Цель регистрации: </label>
			<textarea id='form_about' name='about'></textarea>
		</div>

		<div class="form-row">
			<input type="submit" value='Go'>
		</div>
            <div class="hretyp">
	    <a href="главная страница.html"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Пропустить pегистрацию&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a>
	</div>
	</form>
	</body>

</html>
		    ?>
