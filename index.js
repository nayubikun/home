const container = document.querySelector('.container')
container.addEventListener('animationend', () => {
  container.classList.remove('active');
});


lottie.loadAnimation({
  container: document.getElementById('lottie'), // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '106680-login-and-sign-up.json' // the path to the animation json
});