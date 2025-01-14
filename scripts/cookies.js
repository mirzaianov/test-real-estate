export default function startCookies() {
  const cookies = document.querySelector('.cookies');
  const cookiesButton = document.querySelector('.cookies__button');

  setTimeout(() => {
    cookies.classList.add('open');
  }, 3000);

  cookiesButton.addEventListener('click', () => {
    cookies.classList.remove('open');
    setTimeout(() => cookies.close(), 500); // Wait for the animation to finish
  });
}
