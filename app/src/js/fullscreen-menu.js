// -----------------------------------------------------------------------------
// Fullscreen-menu
// -----------------------------------------------------------------------------

export const fullscreenMenuToggle = () => {
  const navbarToggler = document.querySelector('.navbar-toggler');
  const fullscreenMenu = document.querySelector('.fullscreen-menu');

  navbarToggler.addEventListener('click', function() {
    this.classList.toggle('navbar-toggler--open');
    fullscreenMenu.classList.toggle('fullscreen-menu--open');
    document.body.classList.toggle('no-scroll');
  });
  
  $('.fullscreen-menu__content').scrollbar();
}