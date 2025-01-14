export default function startCookies() {
  const cookies = document.querySelector('.cookies');
  const cookiesButton = document.querySelector('.cookies__button');

  // Open on page load with a delay
  setTimeout(() => {
    cookies.classList.add('open');
  }, 2000);

  // Close on click the cookies button
  cookiesButton.addEventListener('click', () => {
    cookies.classList.remove('open');
    setTimeout(() => cookies.close(), 500);
  });
}
