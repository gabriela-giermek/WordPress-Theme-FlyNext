// Main CSS file
import '../scss/style.scss';

// Vendor scripts
window.$ = window.jQuery = require('jquery');
require('./libs/scrollbar');

// Custom scripts
import { fullscreenMenuToggle } from './fullscreen-menu';

// Function call
document.addEventListener("DOMContentLoaded", () => {
  fullscreenMenuToggle();
});