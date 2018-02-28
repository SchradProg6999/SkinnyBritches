
<!--
For now the scripts at the bottom of the file are needed for bootstrap
functionality that are used in the nav.inc.php file. If you don't include them
then the buttons will do absolutely nothing. You can use this as a reference
to see how you are able to implement your code with others efficiently without
the ass pain of having to reorganize the file structure just to get things working.
The links to the css/bootstrap/fonts are all located in the nav.inc.php file so
there shouldnt be any additional links needed for generic styling and functionality
of your page.
-->

<!-- Includes the global nav -->
<?php
    require_once '../includes/nav.inc.php';
?>

        <div class="headers-wrapper">
            <div class="landing-title-div">
                <h1 id="landing-title">Welcome to Editor's Choice</h1>
            </div>
            <div class="landing-subtitle-div">
                <h4 id="landing-subtitle">'Developing for Developers'</h4>
            </div>
        </div>

        <div class="landing-content-div">
            <div class="landing-main-text">
                <p>Welcome to Editor's Choice! A website you can use to learn all about a variety of text editors all in one place! By default you are in the  <span style="color: #6EB987;"><strong>Atom</strong></span> text editor section.</p>
            </div>
            <div class="btn-div">
                <button type="button" class="btn get-started-btn">Get Started!</button>
            </div>
        </div>
        <div class="footer-spacer"></div>
        <footer>
            <p id="footer-text">&copy; Skinny Britches</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
