<!--Header-->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Test Site</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="./index.php">Home</a>
        <a class="p-2 text-dark" href="./contact.php">Contact</a>
        <a class="p-2 text-dark" href="./testPage.php">Test Page(404)</a>
        <a class="p-2 text-dark" href="./testPage2.php">Test Page 2(404)</a>
    </nav>
    <?php
    if ($_COOKIE['user'] == 'correct'):?>
     <a class="btn btn-outline-primary" href="/mail/auth.php">Personal Cabinet</a>
    <?php else: ?>
    <a class="btn btn-outline-primary" href="/mail/auth.php">Sign up</a>
    <?php endif; ?>
</div>
<!--Header-->