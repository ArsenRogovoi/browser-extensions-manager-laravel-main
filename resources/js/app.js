import './bootstrap';
import { applyTheme, toggleTheme, getIconPath } from './theme';

const themeToggleBtn = document.getElementById('theme-toggle-btn');
const themeToggleBtnIcon = document.getElementById('theme-toggle-btn-icon');

applyTheme();
themeToggleBtnIcon.src = getIconPath();

// register event on theme toggle button.
themeToggleBtn.addEventListener('click', () => {
    toggleTheme();
    themeToggleBtnIcon.src = getIconPath();
});
