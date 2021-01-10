class navbar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const section = document.querySelectorAll(".nav-link");
    section.forEach((selected) => {
      selected.addEventListener("click", (e) => {
        const sectionSelected = e.target.dataset.section;
        if (sectionSelected === "Inicio") {
          let scrollDiv = 0;
          scrollFunctions(scrollDiv);
        }
        if (sectionSelected === "Productos") {
          let scrollDiv = document.getElementById("productos").offsetTop;
          scrollFunctions(scrollDiv);
        }

        if (sectionSelected === "Contacto") {
          let scrollDiv = document.getElementById("form").offsetTop - 200;
          scrollFunctions(scrollDiv);
        }
      });
    });
    const scrollFunctions = (scrollDiv) => {
      window.scrollTo({
        top: scrollDiv,
        behavior: "smooth",
      });
    };
  }
}
window.customElements.define("navbar-functions", navbar);
