class preLoad extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const preLoad = () => {
      const loader = document.getElementById("preload");
      setTimeout(() => {
        loader.classList.add("is-hidden");
      }, 700);
    };

    preLoad();
  }
}
window.customElements.define("preload-functions", preLoad);
