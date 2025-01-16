const whatsapp = document.querySelector('.whatsapp__wrapper');
const whatsappModal = document.querySelector('.whatsapp-modal');
const whatsappModalForm = whatsappModal.querySelector('form');
// const whatsapp = document.querySelector('.whatsapp');
const whatsappModalClose = document.querySelector('.button--whatsapp-modal');

whatsapp.addEventListener('click', () => {
  whatsappModal.showModal();
});

whatsappModal.addEventListener('click', (event) => {
  if (event.target === whatsappModal) {
    whatsappModal.close();
  }
});

whatsappModalClose.addEventListener('click', (event) => {
  event.preventDefault();

  const isFormValid = whatsappModalForm.checkValidity();

  if (isFormValid) {
    whatsappModal.close();
    document.body.removeChild(whatsapp);
  } else {
    whatsappModalForm.reportValidity();
  }
});
