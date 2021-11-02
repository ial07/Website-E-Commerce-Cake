var _button = document.getElementsByClassName('buton');
var _email = document.getElementsByClassName('email');
var _pass = document.getElementsByClassName('pass');
// console.log(_button);
var email = '';
var pass = '';

_button[0].disabled = true;

_email[0].addEventListener('input', function () {
	email = this.value;
	validasi();
});

_pass[0].addEventListener('input', function () {
	pass = this.value;
	validasi();
});

function validasi() {
	if (email && pass) {
		_button[0].disabled = false;
	} else {
		_button[0].disabled = true;
	}
}
