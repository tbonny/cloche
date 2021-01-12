<?php
    // Affiche le menu
    function menu() 
    {
?>  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">MUSIQUE online</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <h4 class="text-white">Collapsed content</h4>
                        <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Index <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Musique.php">Musique</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['User'])) { // permet de verifer si l'utilisateur est admin ou non pour cette affichage
                            echo '<a class="nav-link" href="admin.php">Admin</a>';
                        }  ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
    }

?>