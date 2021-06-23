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

// Initialize Stripe
var stripe = Stripe('pk_test_51ItEnUBleSoMrhiQA3sLLyJDtzfWKGP5ZtZtDz2IE19MhsQN7RyCvAMmzbwqtwgBTqLEscWUDn7DNtqLckYMsW5c00JkHCY0bX');
// Handle for when user click on Donate
function enableDonate() {
    // Show donation buttons
    document.querySelector('.select-donate').style.display = 'block';
    // Scroll to donate section
    document.querySelector('.select-donate').scrollIntoView({
        block: 'center'
    });
}
// Set variable to know if amount is taken from buttons or custom input
var customAmount = false;
// Handle click on donate amount buttons
function selectAmount() {
    // Set all without active
    document.querySelectorAll('.select-donate button[data-amount]').forEach(function(btn) {
        btn.classList.remove('active');
    })
    // Set current to active
    this.classList.add('active');
    // Clear custom amount input
    document.querySelector('.select-donate input').value = '';
    // Mark as not custom amount
    customAmount = false;
    // Check change
    checkAmountValue();
}
// Handle change in custom amount input
function selectCustomAmount() {
    // Set all donate amount buttons without active
    document.querySelectorAll('.select-donate button[data-amount]').forEach(function(btn) {
        btn.classList.remove('active');
    })
    // Mark as custom amount
    customAmount = true;
    // Check change
    checkAmountValue();
}
// Add click on Donate to show available amounts and custom
document.querySelector('.links .donate').addEventListener('click', enableDonate);
document.querySelector('.metas .donate').addEventListener('click', enableDonate);

// Add click to each donate amount button
document.querySelectorAll('.select-donate button[data-amount]').forEach(function(el) {
    el.addEventListener('click', selectAmount)
})

// Add change listener to custom amount input
document.querySelector('.select-donate input').addEventListener('input', selectCustomAmount)

// Check if the amount value if provided
function checkAmountValue() {
    var amount = null;
    var input = document.querySelector('.select-donate input');
    var btnActive = document.querySelector('.select-donate button[data-amount].active');
    // Check value via input
    if (customAmount && input) {
        amount = +input.value;
    } else if (btnActive) {
        // Check via buttons
        amount = +btnActive.getAttribute('data-amount');
    }
    // Show or hide Checkout button
    if (amount) {
        document.querySelector('.create-checkout').style.display = 'block';
        document.querySelector('.create-checkout').setAttribute('data-checkout-amount', amount);
    } else {
        document.querySelector('.create-checkout').style.display = 'none';
        document.querySelector('.create-checkout').removeAttribute('data-checkout-amount');
    }
}

// Create checkout session with provided amount and redirect to checkout
function createCheckout() {
    var amount = +this.getAttribute('data-checkout-amount')
    axios.post('https://stage.cometa.rocks/backend/createDonation/', {
        amount: amount
    }).then(function (response) {
        console.log(response);
    })
    .catch(function (error) {
        console.log(error);
    });
}
// Add click listener for checkout button
document.querySelector('.create-checkout').addEventListener('click', createCheckout)