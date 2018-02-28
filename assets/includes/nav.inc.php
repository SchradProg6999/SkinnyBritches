


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?= URL ?>index.php"><img src="<?= URL_IMG?>logo1.png" alt="Skinny Britches Logo"> Editor's Choice</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= $title == "Home" ? "active" : "" ?>">
            <a class="nav-link" href="<?= URL ?>index.php" >Home</a>
          </li>

          <div class="dropdown">
              <li class="nav-item <?= $title == "General" ? "active" : "" ?>">
                <a class="inactiveLink dropbtn nav-link" href="<?= URL ?>General/Atom/index.php" >General</a>
              </li>
              <div class="dropdown-content">
                <a href="<?= URL ?>General/Atom/index.php">What is Atom</a>
                <a href="<?= URL ?>General/Why/index.php">Why choose Atom</a>
                  <a href="<?= URL ?>General/AtomBasic/index.php">Atom Basics</a>
              </div>
          </div>

          <div class="dropdown">
              <li class="nav-item <?= $title == "Downloads" ? "active" : "" ?>">
                <a class="dropbtn nav-link" href="<?= URL ?>Downloads/index.php">Downloads</a>
              </li>
          </div>

          <div class="dropdown">
              <li class="nav-item <?= $title == "Setup" ? "active" : "" ?>">
                <a class="inactiveLink dropbtn nav-link" href="<?= URL ?>Setup/Windows/index.php">Setup</a>
              </li>
              <div class="dropdown-content">
                <a href="<?= URL ?>Setup/Windows/index.php">Windows</a>
                <a href="<?= URL ?>Setup/Macintosh/index.php">Macintosh</a>
                <a href="<?= URL ?>Setup/Linux/index.php">Linux</a>
              </div>
          </div>

          <div class="dropdown">
              <li class="nav-item <?= $title == "Documentation" ? "active" : "" ?> ">
                <a class="inactiveLink nav-link" href="<?= URL ?>Documentation/AD/index.php">Documentation</a>
              </li>
              <div class="dropdown-content">
                <a href="<?= URL ?>Documentation/AD/index.php">A - D</a>
                <a href="<?= URL ?>Documentation/EQ/index.php">E - Q</a>
                <a href="<?= URL ?>Documentation/RZ/index.php">R - Z</a>
              </div>
          </div>

          <div class="dropdown">
              <li class="nav-item <?= $title == "Extensions" ? "active" : "" ?>">
                  <a class="inactiveLink nav-link" href="<?= URL ?>Extensions/index.php">Extensions</a>
              </li>
              <div class="dropdown-content">
                  <a href="<?= URL ?>Extensions/index.php">Packages</a>
                  <a href="<?= URL ?>Extensions/Themes/Featured/index.php">Featured Themes</a>
                  <a href="<?= URL ?>Extensions/Themes/Trending/index.php">Trending Themes</a>
              </div>
	    </div>
        </ul>
      </div>
    </nav>
    <ul class="nav nav-pills justify-content-end">

        <li class="nav-item">
            <a class="nav-link active" href="#">Atom</a>
        </li>
    </ul>
