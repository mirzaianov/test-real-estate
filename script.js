import startPreloader from './scripts/preloader.js';
import startHeroSlides from './scripts/hero.js';
import startCookies from './scripts/cookies.js';
import startMenu from './scripts/menu.js';
import startWhatsAppModal from './scripts/whatsapp.js';
import startCTA from './scripts/cta.js';
import startContacts from './scripts/contacts.js';

startPreloader();

async function initApp() {
  await Promise.all([
    startHeroSlides(),
    startCookies(),
    startMenu(),
    startWhatsAppModal(),
    startCTA(),
    startContacts(),
  ]);
}

initApp();
