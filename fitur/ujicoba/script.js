const sections = document.querySelectorAll('.parallax-section');

window.addEventListener('scroll', function() {
  const scrollTop = window.pageYOffset;

  sections.forEach(function(section, index) {
    const offset = section.offsetTop;
    const height = section.offsetHeight;

    if (scrollTop >= offset && scrollTop < offset + height) {
      section.style.backgroundPositionY = (scrollTop - offset) * 0.7 + 'px';
    } else {
      section.style.backgroundPositionY = 'center';
    }
  });
});
const sections = document.querySelectorAll('.parallax-section');

window.addEventListener('scroll', function() {
  const scrollTop = window.pageYOffset;

  sections.forEach(function(section, index) {
    const offset = section.offsetTop;
    const height = section.offsetHeight;

    if (scrollTop >= offset && scrollTop < offset + height) {
      section.style.backgroundPositionY = (scrollTop - offset) * 0.7 + 'px';
    } else {
      section.style.backgroundPositionY = 'center';
    }
  });
});
