export default function startWhatsAppModal() {
  const whatsappModal = document.querySelector('.whatsapp-modal');
  const whatsappModalOpen = document.querySelector('.whatsapp');
  const whatsappModalClose = document.querySelector('.button--whatsapp-modal');

  whatsappModalOpen.addEventListener('click', () => {
    whatsappModal.showModal();
  });

  whatsappModalClose.addEventListener('click', () => {
    whatsappModal.close();
  });
}
