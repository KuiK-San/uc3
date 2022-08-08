<div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a href="index.php" class="navbar-brand">CRUD PHP</a>
                <a href="logout.php" class="btn btn-secondary">Sair <i class="fa-solid fa-arrow-right-from-bracket" ></i></a>
            </div>
        </nav>
        <div class="alerta">
            <?php
            if(isset($_SESSION['mensagem'])) {?>
            <div class="alert alert-<?php echo $_SESSION['tipomsg']?> alert-dismissible fade show" role="alert" style="margin-top:2%; " >
                        <?php echo $_SESSION['mensagem'];?>
                        
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } ?>
        </div>