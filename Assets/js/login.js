const loginBtn = document.querySelector("#login");
    
const registerBtn = document.getElementById('register-btn');

loginBtn.addEventListener("click", (event) => {
  let username = document.login.username.value;
  let password = document.login.password.value;
  if (username === 'admin' && password === 'admin') {
    event.preventDefault();
    window.location.href = "./admin";
  } else {
      return alert('Data pengguna tidak ditemukan!');
  }
 });

registerBtn.addEventListener('click', () => {
  window.location.href = './register.html';
});