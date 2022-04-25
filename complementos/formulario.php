
<main class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['mensaje'])) {?>
                    <div class="alert alert-<?=$_SESSION['mensaje_tipo'];?> alert-dismissible fade show" 
                        role="alert">
                        <?php echo $_SESSION["mensaje"] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" 
                        aria-label="Close">
                        </button>
                    </div>

            <?php session_unset(); }?>
            <div class="card" class="card-body ">

                <form action="crud\create.php" method="POST">
                    <div class="form-group">
                        <input  type="text" name="nombre" class="form-control"
                        placeholder="nombre" autofocus
                        >
                    </div>

                    <div class="form-grup">
                        <input type="text" name="apellido" class="form-control"
                        placeholder="Apellido" autofocus
                        >
                    </div>

                        <input type="submit" 
                            value="guardar" 
                            class="btn btn-success btn-block form-control" 
                            name="enviar"
                        >

                </form>
            </div>

        </div>
            <div class="col-md-8">
                <div class="form-grup">

                    <table class="table table-bordered ">
                    <thead>
                        <tr >
                            <th>
                                NOMBRE
                            </th>

                            <th>
                                APELLIDO
                            </th>
                            

                    </tr>
                    </tr>
                    </thead>
                    <tbody>

                    <?php include("crud/read.php")?>

                    </tbody>

                    </table>
                </div>
            </div>
    </div>

</main>
