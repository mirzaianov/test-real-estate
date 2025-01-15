export default function startCTA() {
  const ctaModal = document.querySelector('.cta-modal');
  const ctaForm = ctaModal.querySelector('form');
  const ctaModalOpenButtons = document.querySelectorAll('.button--cta');
  const ctaModalClose = document.querySelector('.button--cta-modal');

  ctaModalOpenButtons.forEach((button) => {
    button.addEventListener('click', () => {
      ctaModal.showModal();
    });
  });

  ctaModal.addEventListener('click', (event) => {
    if (event.target === ctaModal) {
      ctaModal.close();
    }
  });

  ctaModalClose.addEventListener('click', (event) => {
    event.preventDefault();

    const isFormValid = ctaForm.checkValidity();

    if (isFormValid) {
      ctaModal.close();
    } else {
      ctaForm.reportValidity();
    }
  });
}
