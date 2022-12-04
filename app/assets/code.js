
const app = new (function () {
    this.tbody = document.getElementById("tbody");
    this.id = document.getElementById("id");
    this.primernombre = document.getElementById("primerNombre");
    this.segundoNombre = document.getElementById("segundoNombre");
    this.primerApellido = document.getElementById("primerApellido");
    this.segundoApellido = document.getElementById("segundoApellido");
    this.edad = document.getElementById("edad");
    this.Identidad = document.getElementById("Identidad");
    this.direction = document.getElementById("direction");
    this.fechaRegistro = document.getElementById("fechaRegistro");

  
    this.listado = () => {
      fetch("../controllers/listado.php")
        .then((res) => res.json())
        .then((data) => {
          this.tbody.innerHTML = "";
          data.forEach((item) => {
            this.tbody.innerHTML += `
            <tr>
            <td scope="row">${item.idcliente}</td>
            <td>${item.primer_nombre}, ${item.segundo_nombre}</td>
            <td>${item.primer_apellido}, ${item.segundo_apellido}</td>
            <td>${item.edad}</td>
            <td>${item.identidad}</td>
            <td>${item.fecharegistro}</td>
            <td>${item.direccion}</td>
            <td colspan="2" style=" display: flex; justify-content: space-between;">
              <button id="Editar1" type="button" class="btn btn-primary" onclick="editar(${item.id})"><i class="fas fa-pencil-alt"></i> </button>
              <button id="btn-delete" type="button" class="btn btn-danger" onclick="eliminar(${item.id})"><i class="fas fa-trash-alt"></i></button>
              </td>
          </tr>`;
          });
        })
        .catch((error) => console.log(error));
    };
   

    this.guardar = () => {
      var form = new FormData();
      form.append("primerNombre", this.primernombre.value);
      form.append("segundoNombre", this.segundonombre.value);
      form.append("primerApellido", this.primerApellido.value);
      form.append("segundoApellido", this.segundoApellido.value);
      form.append("edad", this.edad.value);
      form.append("Identidad", this.Identidad.value);
      form.append("direction", this.direction.value);
      form.append("fechaRegistro", this.fechaRegistro.value);
      if (this.id.value === "") {
        fetch("../controllers/guardar.php", {
          method: "POST",
          body: form,
        })
          .then((res) => res.json())
          .then((data) => {
            alert("Creado con exito");
            this.listado();
            this.limpiar();
          })
          .catch((error) => console.log(error));
      } else {
        fetch("../controllers/actualizar.php", {
          method: "POST",
          body: form,
        })
          .then((res) => res.json())
          .then((data) => {
            alert("Actualizado con exito");
            this.listado();
            this.limpiar();
          })
          .catch((error) => console.log(error));
      }
    };
    this.editar = (id) => {
      var form = new FormData();
      form.append("id", id);
      fetch("../controllers/editar.php", {
        method: "POST",
        body: form,
      })
        .then((res) => res.json())
        .then((data) => {
          this.id.value = data.id;
          this.nombres.value = data.nombres;
          this.email.value = data.email;
          this.edad.value = data.edad;
        })
        .catch((error) => console.log(error));
    };
    this.eliminar = (id) => {
      var form = new FormData();
      form.append("id", id);
      fetch("../controllers/eliminar.php", {
        method: "POST",
        body: form,
      })
        .then((res) => res.json())
        .then((data) => {
          alert("Eliminado con exito");
          this.listado();
        })
        .catch((error) => console.log(error));
    };
    this.limpiar = () => {
      this.id.value = "";
      this.nombres.value = "";
      this.email.value = "";
      this.edad.value = "";
    };
  })();
  app.listado();

/*********************--- CRUD EMPLEADO --****************************/

const apps = new (function () {
    this.tbody = document.getElementById("tb1");
    this.id = document.getElementById("id");
    this.primernombre = document.getElementById("name");
    this.segundoNombre = document.getElementById("segundoNombre");
    this.primerApellido = document.getElementById("primerApellido");
    this.segundoApellido = document.getElementById("segundoApellido");
    this.edad = document.getElementById("edad");
    this.fechaRegistro = document.getElementById("fechaRegistro");

    this.listado = () => {
        fetch("../control/listados.php")
          .then((res) => res.json())
          .then((data) => {
            this.tbody.innerHTML = "";
            data.forEach((item) => {
              this.tbody.innerHTML += `
              <tr>
              <td scope="row">${item.idempleado}</td>
              <td>${item.primer_nombre}, ${item.segundo_nombre}</td>
              <td>${item.primer_apellido}, ${item.segundo_apellido}</td>
              <td>${item.edad}</td>
              <td>${item.identidad}</td>
              <td>${item.fecha_registro}</td>
              <td colspan="2" style=" display: flex; justify-content: space-between;">
                <button id="Editar1" type="button" class="btn btn-primary" onclick="editar(${item.id})"><i class="fas fa-pencil-alt"></i> </button>
                <button id="btn-delete" type="button" class="btn btn-danger" onclick="eliminar(${item.id})"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>`;
            });
          })
          .catch((error) => console.log(error));
      };
  })();
apps.listado();

