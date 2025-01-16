const menu = document.querySelector('.menu');
const openMenuButton = document.querySelector('.header__menu');
const closeMenuButton = document.querySelector('.menu__close');
const menuItems = document.querySelectorAll('.menu__item');

// Open on click the header hamburger button
openMenuButton.addEventListener('click', () => {
  menu.showModal();
  menu.classList.add('open');
});

// Close on click the menu hamburger button
closeMenuButton.addEventListener('click', () => {
  menu.classList.remove('open');
});

// Close on click outside the menu
menu.addEventListener('click', (event) => {
  if (event.target === menu) {
    menu.classList.remove('open');
  }
});

// Close on click the menu items
menuItems.forEach((item) => {
  item.addEventListener('click', () => {
    menu.classList.remove('open');
  });
});

// Close on click the escape key
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && menu.classList.contains('open')) {
    event.preventDefault();
    menu.classList.remove('open');
  }
});

// Close on transition end
menu.addEventListener('transitionend', () => {
  if (!menu.classList.contains('open')) {
    menu.close();
  }
});
