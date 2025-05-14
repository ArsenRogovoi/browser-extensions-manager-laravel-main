const darkIconPath = '/storage/images/icon-sun.svg';
const lightIconPath = '/storage/images/icon-moon.svg';

// Sets class `dark` to html element if user has dark preference.
export function applyTheme() {
    document.documentElement.classList.toggle("dark", isThemeDark());
}

// Rreturns true if user has dark prefered theme in LocalStorage or 
// dark operetion system preferences and false if not.
export function isThemeDark() {
    return localStorage.theme === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches);
}

// Toggle class `dark` in html element.
export function toggleTheme() {
    const currentTheme = document.documentElement.classList.contains("dark") ? "dark" : "light";
    const newTheme = currentTheme === "dark" ? "light" : "dark";
    localStorage.theme = newTheme;
    applyTheme();
}

export function getIconPath() {
    if(isThemeDark()){
        return darkIconPath;
    } else {
        return lightIconPath;
    }
}