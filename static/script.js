const formSubmitBtn = document.querySelector('.form__submit');
formSubmitBtn.addEventListener('click', function() {
    formSubmitBtn.style.width = '80%';
    formSubmitBtn.style.padding = '10px 15px';
    formSubmitBtn.style.backgroundColor = '#6F6F6F';
});

const formDeleteBtn = document.querySelector('.form__delete');
formDeleteBtn.addEventListener('click', function() {
    formDeleteBtn.style.width = '80%';
    formDeleteBtn.style.padding = '10px 15px';
    formDeleteBtn.style.backgroundColor = 'rgb(125, 8, 8)';
});