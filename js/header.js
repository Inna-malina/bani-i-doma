
// выезжающее бургер-меню начало
let burgerMenu = document.querySelector('.navbar-burger__img');
let navBarContent = document.querySelector('.navbar-content');
let navClose = document.querySelector('.navbar-close__img '); 

burgerMenu.addEventListener('click', function (elem) {
  elem.preventDefault();
  navBarContent.classList.add('navbar-move');
});
navClose.addEventListener('click', function (elem) {
  elem.preventDefault();
  navBarContent.classList.remove('navbar-move');
});
// выезжающее бургер-меню конец