$(document).ready(function () {
  $(".btn-success").click(function () {
    console.log("dtaset", this.dataset);
    let form = document.createElement("form");
    form.action = "ofertar.php";
    form.method = "POST";

    let iid = document.createElement("input");
    iid.type = "hidden";
    iid.name = "id";
    iid.value = this.dataset.id;
    form.appendChild(iid);

    let ioferta = document.createElement("input");
    ioferta.type = "hidden";
    ioferta.name = "oferta";
    ioferta.value = this.dataset.oferta;
    form.appendChild(ioferta);

    let inombre = document.createElement("input");
    inombre.type = "text";
    inombre.name = "nombre";
    inombre.value = this.dataset.nombre;
    form.appendChild(inombre);

    document.body.appendChild(form);

    form.submit();
  });
});
