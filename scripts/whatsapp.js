export default function startWhatsAppModal() {
  const whatsappModal = document.querySelector('.whatsapp-modal');
  const whatsappModalOpen = document.querySelector('.whatsapp');
  const whatsappModalClose = document.querySelector('.button--whatsapp-modal');

  whatsappModalOpen.addEventListener('click', () => {
    whatsappModal.showModal();
  });

  whatsappModal.addEventListener('click', (event) => {
    if (event.target === whatsappModal) {
      whatsappModal.close();
    }
  });

  whatsappModalClose.addEventListener('click', () => {
    whatsappModal.close();
  });
}
