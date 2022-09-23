<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                            <a class="navbar-item">
                                Home
                            </a>

                            <a class="navbar-item">
                                Documentation
                            </a>

                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                More
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        About
                                    </a>
                                    <a class="navbar-item">
                                        Jobs
                                    </a>
                                    <a class="navbar-item">
                                        Contact
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item">
                                        Report an issue
                                    </a>
    

        <div class="navbar-end">
            <div class="navbar-item">
                <?php if(\App\Models\User::auth()): ?>
                    
                    <div id="navbarBasicExample" class="navbar-menu">
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                <strong><?=\App\Models\User::auth()->fname . ' ' . \App\Models\User::auth()->lname?></strong>
                                </a>
                                <div class="navbar-dropdown">
                                    <hr class="navbar-divider">
                                    <a class="navbar-item">
                                        Logout
                                    </a>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="buttons">
                    <a href="/register" class="button is-primary">
                        <strong>Sign up</strong>
                    </a>
                    <a href="/login" class="button is-light">
                        Log in
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>