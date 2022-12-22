<div class="ufive-login">
	<form method="POST" id="loginform">
		<section id="feedback">
			<div class="field">
				<label for="title">Нажмите, чтобы ввести логин</label>
				<p>Ваш e-mail будет использоваться в качестве логина <br />
					<input type="email" name="email" id="email" pattern="\S+@[a-z]+.[a-z]+" min="3" max="50" autofocus required placeholder="mail@mail.ru">
				</p>
			</div>
			<div class="field">
				<label for="title">Нажмите, чтобы ввести пароль</label>
				<p>Пароль <br />
					<input type="password" name="password" id="password" required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}" min="3" max="50" placeholder="Цифры, буквы и символы">
				</p>
			</div>
			<input type="submit" id="button" value="Войти">
			<a href="{{route('/signup')}}">
				<input type="button" id="butt" value="Зарегистрироваться">
			</a>
		</section>
	</form>
</div>