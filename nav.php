    <!-- Navbar -->
    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container">

            <!-- Navbar-Header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img src="log.png" alt="mbdc"></a>
            </div>
            <!-- Navbar-Header -->

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <?php 
                    // If session variable is not set it will redirect to login page
                    if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){

                    ?>
                    <li><a href="login.php" class="btn btn-default">Login</a></li>
                    
                    <?php } else {?>
                    <li><a href="welcome.php" class="btn btn-default">Welcome, Admin</a></li>
                    <li><a href="logout.php" class="btn btn-default">Sign Out</a></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>