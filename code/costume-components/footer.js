customElements.define('footer-component', class extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
      <footer>
        <div class="metas">
          <div class="list">
              <div class="title">Co.meta</div>
              <ul>
                  <li>
                      <a href="/01/" data-lang="en">Introduction</a>
                      <a href="/01/" data-lang="de">Einführung</a>
                      <a href="/01/" data-lang="ca">Introducció</a>
                  </li>
                  <li>
                      <a href="/O/" data-lang="en">Getting Started</a>
                      <a href="/O/" data-lang="ca">Com començar</a>
                  </li>
                  <li>
                      <a class="donate" href="#donate" onclick="document.getElementsByClassName('donate')[0].click();document.getElementsByClassName('donate')[0].scrollIntoView({behavior: 'smooth', block: 'center', inline: 'nearest'}); return false">
                          <span data-lang="en">Donate</span>
                          <span data-lang="de">Spende</span>
                          <span data-lang="ca">Donacions</span>
                      </a>
                  </li>
              </ul>
          </div>
          <div class="list">
              <div class="title" data-lang="en">Learn More</div>
              <div class="title" data-lang="de">Erfahren Sie mehr</div>
              <div class="title" data-lang="ca">Aprèn més</div>
              <ul>
                  <li><a data-lang="en" href="https://github.com/cometa-rocks/cometa_documentation">Documentation</a></li>
                  <li><a data-lang="ca" href="https://github.com/cometa-rocks/cometa_documentation">Documentació</a></li>
                  <li><a data-lang="en" href="https://www.youtube.com/watch?v=8uv-QAJkOLY&t=4s">What the Product</a></li>
                  <li><a data-lang="ca" href="https://www.youtube.com/watch?v=8uv-QAJkOLY&t=4s">Què és el producte?</a></li>
              </ul>

          </div>
          <div class="list">
              <div class="title" data-lang="en">Using Co.meta</div>
              <div class="title" data-lang="ca">Utilització de Co.meta</div>
              <div class="title" data-lang="de">Co.meta verwenden</div>
              <ul>
                  <li>
                      <a href="https://calendso.com/ralf/cometa-demo" data-lang="en">Schedule a demo</a>
                      <a href="https://calendso.com/ralf/cometa-demo" data-lang="ca">Programa una demostració</a>
                      <a href="https://calendso.com/ralf/cometa-demo" data-lang="de">Termin für Demo vereinbaren</a>
                  </li>
                  <li>
                      <a href="/S/" data-lang="en">User Scenarios</a>
                      <a href="/S/" data-lang="ca">Escenaris d'usuari</a>
                      <a href="/S/" data-lang="de">Anwender-Szenarien</a>
                  </li>

                  <li>
                      <a href="https://prod.cometa.rocks/" data-lang="en">Login</a>
                      <a href="https://prod.cometa.rocks/" data-lang="ca">Iniciar sessió</a>
                      <a href="https://prod.cometa.rocks/" data-lang="de">Login</a>
                  </li>
              </ul>
          </div>
          <div class="list">
              <div class="title" data-lang="en">Community & Help</div>
              <div class="title" data-lang="de">Gemeinschaft & Hilfe</div>
              <div class="title" data-lang="ca">Comunitat i ajuda</div>
              <ul>
                  <li>
                      <a href="mailto:contact@cometa.rocks" data-lang="en">Contact Us</a>
                      <a href="mailto:contact@cometa.rocks" data-lang="ca">Contacteu-nos</a>
                      <a href="mailto:contact@cometa.rocks" data-lang="de">Kontakt</a>
                  </li>
                  <li>
                      <a href="https://t.me/joinchat/bFquCBGPBCAwYWZk">Telegram</a>
                  </li>
                  <li>
                      <a href="https://chat.whatsapp.com/CLIOla00LAf4Ym2mux8TXC">WhatsApp</a>
                  </li>
                  <li>
                      <a href="media.html">Logos</a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="copyright" data-lang="en">
          <b>COMETA ROCKS</b> - Software crafted with <span class="emoji">💚</span> in Barcelona.
          <p style="margin-top:10px"/>
              Founded on 01.06.2021 |
              +34 717 102 603 |
              +49 711 89467029 |
              GV de les Corts Catalanes 636 Princ. 1B, 08007 Barcelona, Spain |
              Tax number: ES-B06880405

      </div>
      <div class="copyright">
          <a href="https://linkedin.com/company/cometa-rocks/"><img src="media/linkedin-icon.png" style="width:48px;margin:25px;"></a>
          <a href="https://twitter.com/cometa_rocks"><img src="media/twitter-icon.jpg" style="width:48px;margin:25px;"></a>
      </div>
      <div class="copyright" data-lang="ca">
          <b>COMETA ROCKS</b> - Programari elaborat amb <span class="emoji">💚</span> a Barcelona.
          <p style="margin-top:10px"/>
              Fundat el 01.06.2021 |
              +34 717 102 603 |
              +49 711 89467029 |
              GV de les Corts Catalanes 636 Princ. 1B, 08007 Barcelona, Spain |
              NIF: ES-B06880405
      </div>
      <div class="footer-keywords" data-lang="en">
          Keywords that our users find usefull when searching: web testing, automated software testing, no code, low code, open source, web testing tools, rowser automation, ui testing, automated web testing, gui testing tools, web macro, web ui testing, ui testing framework, ui automation,automated ui testing, web automation, website automation, usertesting, ser testing, testing usability, web usability, usability test, usability testing, online usability testing tools, usability testing software, remote user testing, website usability testing, mobile user testing
      </div>
      <div class="footer-keywords" data-lang="ca">
          Paraules clau que els nostres usuaris troben útils en fer cerques: proves web, proves automàtiques de programari, sense codi, low code, codi obert, eines de proves web, automatització de fileser, proves d’interfície d’usuari, proves web automatitzades, eines de prova de gui, macros de web, proves d’interfície d’usuari web, framework de proves d’interfície d’usuari, automatització d’interfície d’usuari, proves d’interfície d’usuari automatitzades, automatització de webs, automatització de llocs web, proves d’usuari, proves d'usuari, proves d’usabilitat, usabilitat web, proves d’usabilitat, eines de proves d’usabilitat en línia, programari de proves d’usabilitat, proves d’usuaris remots, proves d’usabilitat de llocs web, proves d'usuaris mòbils
      </div>
  </footer>`;
    }
  });