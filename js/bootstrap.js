function Accept() {
var pass = document.getElementById('pass').value;
var login = document.getElementById('login').value;
    win  = document.getElementById('pass-window');
if (login == 'admin' && pass == 'admin1' ) { 
	window.location.href='main.html'
} else { alert('Введенный Вами пароль неверен!'); }
}
