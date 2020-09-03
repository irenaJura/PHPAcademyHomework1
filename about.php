<?php

include 'header.php'; ?>
<header class="text-center">
    <h2>About me page</h2>
    <h4 class="subheader">Some things about me</h4>
</header>
<hr/>
<div class="grid-x">
    <main class="medium-6 large-8 cell">

        <div class="portfolio-resume row">

            <div class="large-4 columns">
                <div class="portfolio-resume-wrapper">
                    <img class="portfolio-resume-headshot" src="https://placehold.it/175" alt="headshot">
                    <h3 class="portfolio-resume-header">Skills</h3>
                    <ul>
                        <li>Playing Cornhole</li>
                        <li>Balancing on my head</li>
                        <li>Drinking milk</li>
                        <li>Going to sleep</li>
                        <li>Not updating my phone apps</li>
                    </ul>
                </div>
            </div>

            <div class="large-4 columns">
                <div class="portfolio-resume-wrapper">
                    <h3 class="portfolio-resume-header">Experience</h3>
                    <div class="portfolio-resume-spacing">
                        <h5><strong>Nanny for Goats</strong></h5>
                        <p>I spent a year at a farm in Ireland raising baby goats. I had to feed them, pet them and play. </p>
                        <ul>
                            <li>Making goats noises</li>
                            <li>Cleaning their stalls</li>
                            <li>Milking the goats</li>
                        </ul>
                    </div>
                    <div class="portfolio-resume-spacing">
                        <h5><strong>SandCastle Builder</strong></h5>
                        <p>I have crafted the skill of sandcastles growing up on the beaches of Galveston.</p>
                        <ul>
                            <li>Avoiding Jellyfish</li>
                            <li>Applying the right amount of water</li>
                            <li>Wearing sunscreen</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="large-4 columns">
                <div class="portfolio-resume-wrapper">
                    <h3 class="portfolio-resume-header">About Me</h3>
                    <p>My eclectic background and hippy upbringing makes me a rare commodity. I'd love to get together and talk over a non-GMO kale smoothie. Email or call me anytime!</p>
                    <div class="portfolio-resume-contact-info">
                        <a href="mailto:#"><i class="fa fa-envelope" aria-hidden="true"></i>someone@email.com</a>
                    </div>
                    <div class="portfolio-resume-contact-info">
                        <a href="tel:+14083410600"><i class="fa fa-phone" aria-hidden="true"></i>555.555.5555</a>
                    </div>
                </div>
            </div>

        </div>



    </main>

    <aside class="medium-6 large-4 cell">
        <div class="form-registration">

            <figure class="form-registration-img">
                <img src="https://images.pexels.com/photos/221205/pexels-photo-221205.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" />
                <figcaption class="form-registration-img-caption">Get an exclusive newsletter for members only.</figcaption>
            </figure>

            <form class="form-registration-group" action="">
                <input class="form-registration-input"  type="email" placeholder="Your email">
                <input class="form-registration-submit-button" type="submit" value="Continue">
                <p class="or-divider"><span>or</span></p>
                <a class="form-registration-social-button" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> Sign Up With facebook</a>
                <p class="form-registration-member-signin">Already a member? <a href="#">Sign in</a></p>
                <p class="form-registration-terms"><a href="#">Terms &amp; Conditions</a>|<a href="#">Privacy</a></p>
            </form>
        </div>

    </aside>

</div>





<?php include 'footer.php'; ?>


