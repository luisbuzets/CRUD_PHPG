
const appl = new (function () {
    this.tbody = document.getElementById("tbl2");
    this.idproducto = document.getElementById("codigo");
    this.nombre = document.getElementById("nombre");
    this.preciocosto = document.getElementById("preciocosto");
    this.precioventa = document.getElementById("precioventa");
    this.inputState = document.getElementById("categoria");

    this.listado = () => {
        fetch("../inventario/list.php")
          .then((res) => res.json())
          .then((data) => {
            this.tbody.innerHTML = "";
            data.forEach((item) => {
              this.tbody.innerHTML += `
              <tr>
              <td scope="row">${item.idproducto}</td>
              <td>${item.nombre}</td>
              <td>${item.preciocosto}</td>
              <td>${item.precioventa}</td>
              <td>${item.categoria}</td>
              <td></td>
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
appl.listado();