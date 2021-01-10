const form = document.getElementById("formContact");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  sendForm();
});

const btn_send = document.getElementById("btn_send");
btn_send.addEventListener("click", function () {
  validateInputs();
});

const validateInputs = () => {
  const name = document.getElementById("inputName");
  const email = document.getElementById("inputEmail");
  const phone = document.getElementById("inputFono");
  const pais = document.getElementById("inputPais");
  const industria = document.getElementById("inputIndustria");

  name.value === ""
    ? name.classList.add("error")
    : name.classList.remove("error");
  email.value === ""
    ? email.classList.add("error")
    : email.classList.remove("error");
  phone.value === ""
    ? phone.classList.add("error")
    : phone.classList.remove("error");
  pais.value === "0"
    ? pais.classList.add("error")
    : pais.classList.remove("error");
  industria.value === "0"
    ? industria.classList.add("error")
    : industria.classList.remove("error");
};

const sendForm = () => {
  const contact_nonce = document.getElementById("contact_nonce");
  const name = document.getElementById("inputName");
  const email = document.getElementById("inputEmail");
  const phone = document.getElementById("inputFono");
  const pais = document.getElementById("inputPais");
  const empresa = document.getElementById("inputEmpresa");
  const industria = document.getElementById("inputIndustria");
  const mensaje = document.getElementById("inputMensaje");
  //postApiDigevo(name, email, phone, pais, empresa, industria, mensaje);
  saveForm(
    contact_nonce,
    name,
    email,
    phone,
    pais,
    empresa,
    industria,
    mensaje
  );
};

const postApiDigevo = (
  name,
  email,
  phone,
  pais,
  empresa,
  industria,
  mensaje
) => {
  const data = {
    name: name,
    email: email,
    phone: phone,
    country: pais,
    enterprise: empresa,
    industry: industria,
    message: mensaje,
  };
  fetch("https://digevo.api/contact/send", {
    method: "POST",
    body: data,
  })
    .then((res) => res.json())
    .then((data) => console.log(data))
    .catch((err) => console.log(err));
};

const saveForm = (
  contact_nonce,
  name,
  email,
  phone,
  pais,
  empresa,
  industria,
  mensaje
) => {
  const data = new FormData();
  data.append("name", name.value);
  data.append("email", email.value);
  data.append("phone", phone.value);
  data.append("pais", pais.value);
  data.append("empresa", empresa.value);
  data.append("industria", industria.value);
  data.append("mensaje", mensaje.value);
  fetch("wp-content/plugins/contacto/server/save_form.php", {
    method: "POST",
    body: data,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.success === true) {
        const alert = document.querySelector(".successMessage");
        alert.style.display = "block";
        cleanInputs();
      }
    })
    .catch((err) => console.log(err));
};

const cleanInputs = () => {
  document.getElementById("inputName").value = "";
  document.getElementById("inputEmail").value = "";
  document.getElementById("inputFono").value = "";
  document.getElementById("inputPais").value = "0";
  document.getElementById("inputEmpresa").value = "";
  document.getElementById("inputIndustria").value = "0";
  document.getElementById("inputMensaje").value = "";
};
