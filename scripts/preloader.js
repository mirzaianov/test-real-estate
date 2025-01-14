export default function startPreloader() {
  document.addEventListener('DOMContentLoaded', () => {
    const preloader = document.querySelector('.preloader');
    preloader.showModal();

    window.addEventListener('load', () => {
      preloader.close();
    });
  });
}
