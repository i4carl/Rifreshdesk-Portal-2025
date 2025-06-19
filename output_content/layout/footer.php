<?php
    // Get the requested page from the URL, e.g. index.php?page=about
    $footerpage = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Sanitize page name to avoid directory traversal
    $footerpage = basename($footerpage);

    if($footerpage != 'login-page') {
?>
<footer class="container-fluid px-0">
    <section class="fw-contact-info d-none">
        <p class="fw-contacts"></p>
    </section>
    <section class="fw-credit">
        <nav class="fw-laws">
            <span class="copyright-text">Helpdesk Software by</span>
            <a id="" href="https://www.freshworks.com/freshdesk/?utm_source=portal&amp;utm_medium=reflink&amp;utm_campaign=portal_reflink" class="fw-branding" target="_blank">Freshdesk</a>
            <a id="" href="" class="cookie-link" data-bs-toggle="modal" data-bs-target="#portal-cookie-info">Cookie policy</a>

            <div class="modal fade" id="portal-cookie-info" tabindex="-1" role="dialog" aria-labelledby="portal-cookie-info" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="cookie-header">Why we love Cookies</h3>
                            <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>We use cookies to try and give you a better experience in Freshdesk.</p>
                            <p>
                                You can learn more about what kind of cookies we use, why, and how from our <a class="privacy-link" href="https://www.freshworks.com/privacy/" target="_blank">Privacy policy</a>. If you hate cookies,
                                or are just on a diet, you can disable them altogether too. Just note that the Freshdesk service is pretty big on some cookies (we love the choco-chip ones), and some portions of Freshdesk may not
                                work properly if you disable cookies.
                            </p>
                            <p>
                                We’ll also assume you agree to the way we use cookies and are ok with it as described in our <a class="privacy-link" href="https://www.freshworks.com/privacy/" target="_blank">Privacy policy</a>,
                                unless you choose to disable them altogether through your browser.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a id="" href="https://www.freshworks.com/privacy" class="footer-link" target="_blank">Privacy Policy</a>
        </nav>
    </section>
</footer>
<?php } ?>