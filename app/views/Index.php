<?php

include_once "./seguridad.php";

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameStore</title>
    <script src="https://kit.fontawesome.com/df25df16a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">

</head>

<body>


    <!--   estructura del side       -->
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-3 pt-3 pb-4">
                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">GS</span><span
                        class="text-white">Game Store</span> </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                        class="fas fa-stream"></i></button>
            </div>
            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block" onclick="mostrarProductos()"><i
                            class="fas fa-shopping-bag"></i> PRODUCTOS</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block" onclick="mostrarCliente()"><i
                            class="fas fa-users"></i> CLIENTE</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block" onclick="mostrarEmpleados()"><i
                            class="fas fa-user-tie"></i> EMPLEADO</a></li>
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block" onclick="mostrarFactura()"><i
                            class="fas fa-file-alt"></i> FACTURA</a></li>
            </ul>
            <hr class="h-color mx-2">

            <ul class="list-unstyled px-2">
                <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-cogs"></i>
                        CONFIGURACION</a></li>
                <li class=""><a href="logout.php" class="text-decoration-none px-3 py-2 d-block"><i
                            class="fas fa-sign-out-alt"></i> SALIR</a></li>
            </ul>
        </div>

        <main class="content ">
            <!--cliente-->

            <div class="card" id="CLIENTE">
                <!-- Registro clientes-->
                <div class="card  mx-2 my-4" action="javascript:void(0);" onsubmit="app.guardar()">
                    <div class="card-header">
                        CLIENTES
                    </div>
                    <div id="card1" class="card-body">

                        <div class="row">

                            <div class="col-3">
                                <label id="texto1" for="primernombre">Primer Nombre</label>
                                <input type="text" id="primerNombre" class="form-control w-28"
                                    aria-label="Primer Nombre" aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="segundoNombre">Segundo Nombre</label>
                                <input type="text" id="segundoNombre" class="form-control w-28"
                                    aria-label="Segundo Nombre" aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="primerApellido">Primer Apellido</label>
                                <input type="text" id="primerApellido" class="form-control w-28"
                                    aria-label="Primer Apellido" aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="segundoApellido">Segundo Apellido</label>
                                <input type="text" id="segundoApellido" class="form-control w-28"
                                    aria-label="Segundo Apellido" aria-describedby="button-addon2">
                            </div>

                        </div>

                        <div id="filabaja" class="row">

                            <div class="col-3">
                                <label id="texto1" for="edad">Edad</label>
                                <input type="text" id="edad" class="form-control" style="width: 128px;"
                                    placeholder="17-99" aria-label="Edad" aria-describedby="button-addon2">
                            </div>

                            <div id="identidad" class="col-3">
                                <label id="texto1" for="identidad">Identidad</label>
                                <input type="text" class="form-control w-28" id="Identidad" placeholder="0801199900401"
                                    aria-label="Identidad" aria-describedby="button-addon2">
                            </div>

                            <div id="direccion" class="col-3">
                                <label id="texto1" for="direccion">Direccion</label>
                                <input type="text" id="direction" class="form-control w-28" placeholder="Tegucigalpa"
                                    aria-label="Direccion" aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="startDate">Fecha</label>
                                <input id="startDate" class="form-control" type="date" />
                            </div>

                        </div>
                        <div id="button1">
                            <button type="button" class="btn btn-secondary w-20 " id="btn-guardar"
                                onclick="guardar()">GUARDAR</button>
                            <button type="button" class="btn btn-secondary w-20 " id="btn-Actualizar"
                                onclick="actualizar()" style="display: none;">Actualizar</button>
                            <button type="button" class="btn btn-secondary w-20 " onclick="limpiar()"
                                style="display: none;">Nuevo</button>
                        </div>

                    </div>

                </div>

                <!--boton de busqueda-->
                <div id="busq1" class="col-6">
                    <div id="search1">
                        <button type="button" class="btn btn-secondary">BUSCAR</button>
                    </div>
                    <div>
                        <input id="barra1" type="text" class="form-control" style="border-radius: 85px;"
                            aria-label="First name">
                    </div>

                </div>

                <!--tabla-->
                <div id="grip1">

                    <table class="table table-striped " id="tabla-cliente">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Identidad</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Direccion</th>
                                <th colspan="4" scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <!-- informacion en tabla-->
                        </tbody>
                    </table>

                </div>

            </div>



            <!--productos -->
            <div class="card" id="PRODUCTOS">
                <!-- Registro Productos-->
                <div class="card  mx-2 my-4">
                    <div class="card-header">
                        REGISTRO DE PRODUCTOS
                    </div>
                    <div id="card1" class="card-body">

                        <div class="row">

                            <div class="col-3">
                                <label id="texto1" for="Codigo">Codigo</label>
                                <input type="text" id="Codigo" class="form-control w-28" aria-label="Primer Nombre"
                                    aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="nombre">Nombre</label>
                                <input type="text" id="nombre" class="form-control w-28" aria-label="Segund Nombre"
                                    aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="preciocosto">Precio Costo</label>
                                <input type="text" id="preciocosto" class="form-control w-28"
                                    aria-label="Primer Apellido" aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="precioventa">Precio Venta</label>
                                <input type="text" id="precioventa" class="form-control w-28"
                                    aria-label="Segundo Apellido" aria-describedby="button-addon2">
                            </div>

                        </div>

                        <div id="filabaja1" class="row">

                            <div class="col-md-3">

                                <label id="texto1" for="categoria" class="form-label">Categoria</label>
                                <select id="categoria" class="form-select">
                                    <option selected>Selecione...</option>
                                    <option>Consola</option>
                                    <option>Video Juegos</option>
                                    <option>Accesorios</option>
                                </select>

                            </div>
                            <!--
            <div  id="identidad" class="col-md-3">
              <label id="texto1" for="taller" class="form-label">Taller</label>
                <select id="taller" class="form-select">
                  <option selected>Selecione...</option>
                  <option>1</option>
                </select>
            </div>
            -->
                        </div>
                        <div id="button1">
                            <div></div>
                            <button type="button" class="btn btn-secondary w-20" id="btn_save">GUARDAR</button>
                        </div>

                    </div>

                </div>

                <!--boton de busqueda-->
                <div id="busq1" class="col-6">
                    <div id="search1">
                        <button type="button" class="btn btn-secondary">BUSCAR</button>
                    </div>
                    <div>
                        <input id="barra1" type="text" class="form-control" style="border-radius: 85px;"
                            aria-label="First name">
                    </div>

                </div>

                <!--tabla-->
                <div id="grip1">

                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col-5">Codigo</th>
                                <th scope="col-2">Descripcion</th>
                                <th scope="col-1">Precio Costo</th>
                                <th scope="col-1">Precio Venta</th>
                                <th scope="col-4">Categoria</th>
                                <th></th>
                                <th colspan="2" scope="col-1">ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="tbl2">


                        </tbody>
                    </table>

                </div>

            </div>

            <!--Empleado -->

            <div class="card" id="EMPLEADO">
                <div class="card  mx-2 my-4" action="javascript:void(0);" onsubmit="apps.guardar()">
                    <div class="card-header">
                        EMPLEADO
                    </div>
                    <div id="card1" class="card-body">
                        <div class="row">

                            <div class="col-3">
                                <label id="texto1" for="primernombre">Primer Nombre </label>
                                <input type="text" class="form-control w-28" aria-label="Primer Nombre"
                                    aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="segundonombre">Segundo Nombre</label>
                                <input type="text" class="form-control w-28" aria-label="Segund Nombre"
                                    aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="primerApellido">Primer Apellido</label>
                                <input type="text" class="form-control w-28" aria-label="Primer Apellido"
                                    aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="segundoApellido">Segundo Apellido</label>
                                <input type="text" class="form-control w-28" aria-label="Segundo Apellido"
                                    aria-describedby="button-addon2">
                            </div>
                            <div id="filabaja" class="row">

                                <div class="col-3">
                                    <label id="texto1" for="edad">Edad</label>
                                    <input type="text" class="form-control" style="width: 128px;" placeholder="17-99"
                                        aria-label="Edad" aria-describedby="button-addon2">
                                </div>

                                <div id="identidad" class="col-3">
                                    <label id="texto1" for="Identidad">Identidad</label>
                                    <input type="text" class="form-control w-28" placeholder="0801199900401"
                                        aria-label="Identidad" aria-describedby="button-addon2">
                                </div>
                                <div class="col-3">
                                    <label id="texto1" for="fecharegistro">Fecha inicio</label>
                                    <input id="startDate" class="form-control" type="date" />

                                </div>
                            </div>
                            <div id="button1">
                                <button type="button" class="btn btn-secondary w-20 " id="btn_salvar">GUARDAR</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--boton de busqueda-->
                <div id="busq1" class="col-6">
                    <div id="search1">
                        <button type="button" class="btn btn-secondary">BUSCAR</button>
                    </div>
                    <div>
                        <input id="barra1" type="text" class="form-control" style="border-radius: 85px;"
                            aria-label="First name">
                    </div>
                </div>
                <div id="grip1">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombres </th>
                                <th scope="col">Apellidos </th>
                                <th scope="col">Edad</th>
                                <th scope="col">Identidad</th>
                                <th scope="col">Fecha Registrada</th>
                                <th colspan="2" scope="col">ACTION</th>

                            </tr>
                        </thead>
                        <tbody id="tb1">
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Factura -->
            <div class="card" id="FACTURA">
                <div class="card  mx-1 my-2">
                    <div class="card-header">
                        FACTURA
                    </div>
                    <div id="card1" class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label id="texto1" for="name">Cliente</label>
                                    <input type="text" class="form-control w-28" aria-label="S"
                                        aria-describedby="button-addon2">
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label id="texto1" for="name">Vendedor</label>
                                    <input type="text" class="form-control w-28" aria-label="S"
                                        aria-describedby="button-addon2">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label id="texto1" for="inputState" class="form-label">Tipo pago</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Selecione...</option>
                                            <option>Efectivo</option>
                                            <option>Tarjeta</option>

                                        </select>
                                    </div>

                        </form>
                        <div class="row">
                            <div class="col-3">
                                <label id="texto1" for="name">Nombre Producto</label>
                                <input type="text" class="form-control w-28" aria-label="Producto"
                                    aria-describedby="button-addon2">
                            </div>


                            <div class="col-3">
                                <label id="texto1" for="name">Cantidad</label>
                                <input type="text" class="form-control w-28" aria-label="Cantidad"
                                    aria-describedby="button-addon2">
                            </div>

                            <div class="col-3">
                                <label id="texto1" for="name">Precio</label>
                                <input type="text" class="form-control w-28" aria-label="Precio"
                                    aria-describedby="button-addon2">
                            </div>

                        </div>
                        <div id="button1">
                            <button type="button" class="btn btn-secondary w-20 " id="btn_imprimir">Imprimir</button>
                        </div>

                    </div>

                </div>
            </div>
    </div>

    </main>




    </div>


    <script src="../assets/code.js"></script>
    <script src="../assets/codig.js"></script>
    <script src="JS/axios.min.js"></script>
    <script src="../views/JS/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../views/JS/alerts.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>