customElements.define('header-component', class extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header>
            <div class="menu"></div>
            <div>
                <div class="theme-switcher">
                    <div class="item light" data-lang="en" onclick="changeTheme('light')">
                    Light
                    </div>
                    <div class="item light" data-lang="ca" onclick="changeTheme('light')">
                    Clar
                    </div>
                    <div class="switch" onclick="changeTheme()">
                    <div class="point right"></div>
                    </div>
                    <div class="item dark" data-lang="en" onclick="changeTheme('dark')">
                    Dark
                    </div>
                    <div class="item dark" data-lang="ca" onclick="changeTheme('dark')">
                    Fosc
                    </div>
                </div>
                <div class="language-switcher">
                    <a  class="lang english selected" onclick="changeLanguage('en')">EN</a>
                    <div class="separator">
                    |
                    </div><a class="lang catalan" onclick="changeLanguage('ca')">CA</a>
                </div>
            </div>
        </header>`;
    }
});