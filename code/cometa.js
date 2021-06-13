/**
 * cometa.js contains small javascipt functions to be use on cmeta rocks page
 * 
 * 2021-06-21 RRO extracted script from index to also use it on privacy.html
 *  
 */

// Load saved language on load
var initialLang = localStorage.getItem('lang');
if (initialLang === 'en' || initialLang === 'de') {
    changeLanguage(initialLang)
}
// Load saved theme on load
var initialTheme = localStorage.getItem('theme');
if (initialTheme === 'light' || initialTheme === 'dark') {
    changeTheme(initialTheme)
}
function changeLanguage(lang) {
    // Update DOM
    document.documentElement.setAttribute('lang', lang);
    localStorage.setItem('lang', lang);
}
function changeTheme(theme) {
    if (theme) {
        // Update DOM
        document.documentElement.setAttribute('theme', theme);
    } else {
        // If theme is not passed, consider inverting the theme
        theme = document.documentElement.getAttribute('theme');
        theme = theme === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('theme', theme);
    }
    localStorage.setItem('theme', theme);
}
// Sticky header
var header = document.querySelector('header');
var lastScroll = window.pageYOffset || 0;

// Handle scroll event
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > lastScroll && currentScroll > 200) {
        // Is scrolling down
        header.style.top = '-' + header.offsetHeight + 'px';
    } else if (currentScroll < lastScroll) {
        // Is scrolling up
        header.style.top = 0;
    }
    lastScroll = currentScroll;
});
