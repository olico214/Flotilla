const toggleButton = document.querySelector('.navbar-toggler');
const sidebar = document.querySelector('.sidebar');
const overlay = document.querySelector('.overlay');
const mainContent = document.querySelector('#main-content');

toggleButton.addEventListener('click', () => {
sidebar.classList.toggle('open');
overlay.classList.toggle('visible');
});

overlay.addEventListener('click', () => {
sidebar.classList.remove('open');
overlay.classList.remove('visible');
});

mainContent.addEventListener('click', () => {
if (sidebar.classList.contains('open')) {
sidebar.classList.remove('open');
overlay.classList.remove('visible');
}
});