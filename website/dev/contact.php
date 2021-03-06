<?php require 'partials/header.php';?>
    <section class="width-container">
        <h1>Contact Tread Setters Tires</h1>
        <form method="post" action="/submit-contact">
            <h2>Submit a question or comment</h2>
            <!--
            <p>
                Many common questions are answered on our
                <a href="/tread-setters-tires-blog">Blog</a> and
                <a href="/support">Support</a> pages.
            </p>
            -->
            <div class="contact-form">
                <div>
                    <input type="text" placeholder="First Name" name="fname">
                    <input type="text" placeholder="Last Name" name="lname">
                </div>
                <div>
                    <input type="text" placeholder="Email" name="email">
                    <input type="text" placeholder="Phone" name="phone">
                </div>

                <!--
                <div>
                    <input type="text" placeholder="Zip Code" name="zip">
                </div>
                -->

                <div class="clear">
                    <p class="left">Subject: &nbsp;&nbsp;&nbsp;</p>
                    <select name="about" class="left">
                        <option></option>
                        <option <?=(($_REQUEST['s'] == 1) ? 'selected' : '');?>>New Tires</option>
                        <option <?=(($_REQUEST['s'] == 2) ? 'selected' : '');?>>Used Tires</option>
                        <option <?=(($_REQUEST['s'] == 3) ? 'selected' : '');?>>Recycling Tires</option>
                    </select>
                </div>
                <div>
                    <textarea name="comments" placeholder="Question/Comments"></textarea>
                </div>
                <div>
                    <input type="submit" name="submitted" value="Send">
                </div>
            </div>
        </form>
    </section>
<?php require 'partials/footer.php';?>
