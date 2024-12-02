const passInput = document.querySelector('input[type=password]');
const icon=document.querySelector('i');
passInput.addEventListener('input', function(){
    if(this.value.length > 0){
        icon.classList.add('show');
    }else{
        icon.classList.remove('show');
    }
});

icon.addEventListener('mousedown', function(){
    passInput.setAttribute('type', 'text')
});
icon.addEventListener('mouseup', function(){
    passInput.setAttribute('type', 'password')
})

const passwordInput = document.getElementById('password');
  passwordInput.addEventListener('input', () => {
    if (passwordInput.value.length >= 7) {
      passwordInput.style.borderColor = 'red';
    } else {
      passwordInput.style.borderColor = 'blue';
    }
});