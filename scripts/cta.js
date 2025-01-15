export default function startCTA() {
  const ctaModal = document.querySelector('.cta-modal');
  const ctaModalOpenButtons = document.querySelectorAll('.button--hero');
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

  ctaModalClose.addEventListener('click', () => {
    ctaModal.close();
  });
}
