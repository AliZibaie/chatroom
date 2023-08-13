const passwordField = document.getElementById('password');
const showPasswordIcon = document.querySelector('.show-password');
const hidePasswordIcon = document.querySelector('.hide-password');
const spinner = document.getElementById('spinner');

showPasswordIcon.addEventListener('click', () => {
  showPasswordIcon.style.display = 'none';
  hidePasswordIcon.style.display = 'block';
  passwordField.setAttribute('type', 'text');
});

hidePasswordIcon.addEventListener('click', () => {
  hidePasswordIcon.style.display = 'none';
  showPasswordIcon.style.display = 'block';
  passwordField.setAttribute('type', 'password');
});


form12.addEventListener("submit",() => {
  spinner.style.display = 'block';
})