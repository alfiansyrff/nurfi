const password = document.getElementById("password");
const message = document.getElementById('message');
const confirmPassword = document.getElementById('konfirm__password');
let isValidatedPassword = false;

password.addEventListener('blur', () => {
  message.style.display = 'none';
});

password.addEventListener('focus', () => {
  if (isValidatedPassword) {
    return;
}

message.innerHTML = `<p>Password harus memiliki panjang minimal 8 karakter, yang terdiri dari kombinasi huruf kecil, huruf besar, dan angka</p>`;
  message.style.display = 'block';
});


confirmPassword.addEventListener('blur', () => {
  message.style.display = 'none';
});


confirmPassword.addEventListener('focus', () => {

  if(password.value.trim() === "") {
    message.innerHTML = `<p>Harap isi Password terlebih dahulu</p>`;
    message.style.display = 'block';
    return;
  }
});


password.onkeyup = () => {
  let hurufKecil = /[a-z]/g;
  let hurufBesar = /[A-Z]/g;
  let angka = /[0-9]/g;


  if ( password.value.match(hurufKecil) && password.value.match(hurufBesar) && password.value.match(angka) && password.value.length >= 8){
    message.style.display = 'none';
    isValidatedPassword = true;
  }

};

confirmPassword.onkeyup = () => {

  if (confirmPassword.value !== password.value) {
    message.innerHTML = ` <p>Password dan Konfirmasi Password harus sama</p>`;
    message.style.display = 'block';
    return;
  } 

  message.style.display = 'none';

};
