<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class ="nav-item">
      <a href="http://localhost" class="nav-link">Acceuil</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exemples
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
                for($i = 0; $i <= 15; $i++){
            ?>
            <li><a class="dropdown-item" href="../../exemple/exemple00<?= $i +1?>">Exemple <?=$i + 1 ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Exercices
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
                for($i = 0; $i <= 15; $i++){
            ?>
            <li><a class="dropdown-item" href="../../exercices/exercice00<?= $i +1?>">Exercice <?=$i + 1 ?></a></li>
            <?php } ?>
          </ul>
        </li>
        </ul>
    </div>
  </div>
</nav>