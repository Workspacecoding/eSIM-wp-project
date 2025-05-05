const toggleBtn = document.getElementById('menuToggle');
const closeBtn = document.getElementById('menuClose');
const menu = document.getElementById('mobileMenu');

if (toggleBtn && menu) {
  toggleBtn.addEventListener('click', function () {
    // 切換 display 屬性
    if (menu.style.display === 'flex') {
      menu.style.display = 'none';
    } else {
      menu.style.display = 'flex';
    }
  });
}

if (closeBtn && menu) {
  closeBtn.addEventListener('click', function () {
    menu.style.display = 'none';
  });
}
