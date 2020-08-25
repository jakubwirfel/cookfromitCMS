<nav class="navigation">
    <div class="nav-box">
        <div class="logo">
            <h1><?php echo SITE_TITLE ?></h1>
        </div>
        <div class="items">
            <div class="search-box">
                <input id="search" type="text" autocomplete="off" placeholder="Search..." />
                    <div class="result">

                    </div>
                <label for="search" class="icon"><i class="fas fa-search"></i></label>
            </div>
            <div class="user-box">
                <a class="dropdown-holder" href="#" aria-haspopup="true">
                    <div class="img-box">
                        <img src="https://www.w3schools.com/w3images/team2.jpg" alt="user"/>
                    </div>
                    <h2><?php echo $_SESSION['username'] ?> / Moderator</h2>
                    <i class="fas fa-angle-down"></i>
                    <div class="dropdown-content">
                        <p>Hello World!</p>
                        <p>Hello World!</p>
                        <p>Hello World!</p>
                        <p>Hello World!</p>
                        <p>Hello World!</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</nav>