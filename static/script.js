const btn = document.querySelector('.form__btn');
btn.addEventListener('click', function() {
    btn.style.width = '40%';
    btn.style.padding = '5px 10px';
    btn.style.backgroundColor = '#6F6F6F';
});

const toggleButton = document.querySelector('.header__toggle-button');
const headerNav = document.querySelector('.header__nav');

toggleButton.addEventListener('click', function() {
  headerNav.classList.toggle('header__nav--active');
});