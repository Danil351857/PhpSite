

const video = document.querySelector('.video-div video');

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    const maxScroll = 700;

    const scrollRatio = Math.min(scrollY / maxScroll, 1);
    const blur = scrollRatio * 10; 
    const brightness = 1 - scrollRatio * 0.8; 

    video.style.filter = `blur(${blur}px) brightness(${brightness})`;



  });
function toggleMenu() {
  document.querySelector('.navigation').classList.toggle('show');
}