const btn = document.querySelector('.form__btn');
btn.addEventListener('click', function() {
    btn.style.width = '40%';
    btn.style.padding = '5px 10px';
    btn.style.backgroundColor = '#6F6F6F';
});

const link = document.querySelector('.header__menu-item')
link.addEventListener('click', function(){
  link.style.borderBottom = '1px solid white';
})