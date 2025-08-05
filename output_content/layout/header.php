<?php
    // Get the requested page from the URL, e.g. index.php?page=about
    $footerpage = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Sanitize page name to avoid directory traversal
    $footerpage = basename($footerpage);

    if($footerpage != 'login-page' && $footerpage != 'home-page') {
?>
<header class="container-fluid px-0 fw-nav-wrapper fixed-top">
    <section class="bg-light container-fluid">
        <div class="container">
            <a id="" href="#fw-main-content" class="visually-hidden visually-hidden-focusable p-8 my-12 btn btn-outline-primary">Skip to main content</a>
        </div>
    </section>

    <section class="container">
        <nav class="navbar navbar-expand-xl navbar-light px-0 py-8 pt-xl-4 pb-xl-0">
            <a class="navbar-brand d-flex align-items-center" href="https://i4asiacorp.com">
                <img data-src="/assets/misc/logo.png" loading="lazy" alt="Freshworks Logo" class="d-inline-block align-top me-4 fw-brand-logo lazyloaded" src="/assets/misc/logo.png" />
                <div class="fs-22 semi-bold fw-brand-name ms-4" title="Customer Service Suite">Customer Service Suite</div>
            </a>

            <button
                class="navbar-toggler collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarContent"
                aria-controls="navbarContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                id="navbarContentToggler"
            >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mt-64 mt-xl-0">
                    <li class="nav-item">
                        <a href="/support/home" class="nav-link"> <span class="d-md-none icon-home"></span> Home </a>
                    </li>

                    <li class="nav-item">
                        <a href="/support/solutions" class="nav-link"> <span class="d-md-none icon-solutions"></span> Knowledge base </a>
                    </li>

                    <li class="nav-item">
                        <a href="/support/discussions" class="nav-link"> <span class="d-md-none icon-forums"></span> Forums </a>
                    </li>

                    <li class="nav-item">
                        <a href="/support/tickets" class="nav-link"> <span class="d-md-none icon-tickets"></span> Tickets </a>
                    </li>

                    <li class="nav-item no-hover">
                        <a id="" href="/support/tickets/new" class="btn fw-secondary-button">Submit a ticket</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row align-items-center ps-8 fw-nav-dropdown-wrapper">
                    <li class="nav-item dropdown no-hover fw-user-avatar px-xl-8">
                        <a class="nav-link dropdown-toggle fw-avatar" href="#" id="userDropdownMenu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="fw-avatar-text">C</div>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                            <div class="dropdown-item fw-user-info">
                                <div class="fw-avatar d-inline-block me-8">
                                    <div class="fw-avatar-text">C</div>
                                </div>
                                Carl Costiniano
                            </div>
                            <div class="dropdown-divider"></div>

                            <a id="" href="/" class="dropdown-item">Dashboard</a>

                            <a id="" href="/support/profile/edit" class="dropdown-item">My profile</a>

                            <a id="" href="/logout" class="dropdown-item">Sign out</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown no-hover ms-auto"></li>
                </ul>
            </div>
        </nav>
    </section>
    <div class="nav-overlay d-none"></div>
</header>
<?php } ?>