const inputs = document.querySelectorAll('input');
const passwordField = document.getElementById('userpassword');
const showPasswordIcon = document.querySelector('.show-password');
const hidePasswordIcon = document.querySelector('.hide-password');
const form12 = document.getElementById('form');
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

const patterns = {
  name:  /[a-z\s]{3,32}/,
  username: /[a-zA-Z0-9_]{3,32}/,
  email: /[a-zA-Z0-9]+@{1}[a-z]+\.[a-z]{2,}/,
  password: /[a-zA-Z0-9\~\!\@\#\%\^\&\*\(\)\[\]\{\}\/\+\-\_\?\<\>\$]{2,}/,
};

// Object.entries(patterns)
//  console.log(patterns["name"].test(""))


function validate(userInput, regex){
    let isValid = regex.test(userInput.value);
    if (isValid) {
    let classes = userInput.classList.value
    classes = classes + " is-valid"
    userInput.className = classes
    if (classes.includes("is-invalid")) {
        userInput.classList.remove("is-invalid")
    }
  } else {
    let classes2 = userInput.classList.value
    classes2 = classes2 + " is-invalid"
    userInput.className = classes2
    if (classes2.includes("is-valid")) {
        userInput.classList.remove("is-valid")
    }
  }
}



inputs.forEach((input) => {
  input.addEventListener('keyup', (e) => {
    // console.log(inputTarget.value)
     validate(e.target, patterns[e.target.name]);
  });
});
console.log(inputs[0].classList.value)

form12.addEventListener("submit",() => {
  spinner.style.display = 'block';
})