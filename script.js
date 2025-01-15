import startPreloader from './scripts/preloader.js';
import startHeroSlides from './scripts/hero.js';
import startCookies from './scripts/cookies.js';
import startMenu from './scripts/menu.js';
import startWhatsAppModal from './scripts/whatsapp.js';
import startCTA from './scripts/cta.js';

startPreloader();
startHeroSlides();
startCookies();
startMenu();
startWhatsAppModal();
startCTA();

const contacts = document.querySelector('.contacts');
const contactsForm = contacts.querySelector('form');
const contactsFormClose = contacts.querySelector('.button--contacts-form');

contactsFormClose.addEventListener('click', (event) => {
  event.preventDefault();

  const isFormValid = contactsForm.checkValidity();

  if (isFormValid) {
    contactsForm.reset();
  } else {
    contactsForm.reportValidity();
  }
});
