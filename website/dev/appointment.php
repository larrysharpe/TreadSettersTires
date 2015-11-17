<?php


require 'partials/header.php';
$scripts[] = 'schedule-appt';
$services = Array(
'New Tires' => array('description' => ''),
'Quality Used Tires' => array('description' => ''),
'Tire Balancing ' => array('description' => ''),
'Tire Mounting ' => array('description' => ''),
'Tire Repair ' => array('description' => ''),
'Tire Recycling ' => array('description' => ''),
'Scrap Tire Hauling' => array('description' => '')
);
$makes = Array ('Cadillac', 'Ford', 'Tesla');
$models = Array ('CTS', 'Mustang', 'Model X');


?>
    <form method="post" class="width-container" action="/">
        <h1>Schedule an Appointment With Tread Setters</h1>

        <section class="contact-info contact-form">
            <h2>Contact Information</h2>
            <p>Your information is secure, and will not be shared with a third party.
               Click here to read our <a href="/privacy-policy">Privacy Policy</a>. </p>
            <div>
                <input type="text" placeholder="First Name" name="fname">
                <input type="text" placeholder="Last Name" name="lname">
            </div>
            <div>
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Phone" name="phone">
            </div>
            <div>
                <input type="text" placeholder="Zip Code" name="zip">
            </div>
            <div>
                <input type="submit" name="btn-contact-info" value="Next">
            </div>
            </div>
        </section>
        <section class="vehicle-info hidden">
            <div>
                <h2>What Kind Of Car Do You Have</h2>
                <div>
                    <select size="7" name="vehicle-year">
                        <?php for ($i=date('Y');$i> date('Y')-25; $i--) {?>
                            <option><?=$i;?></option>
                        <?php } ?>
                    </select>

                    <select size="7" name="vehicle-make" class="invisible">
                        <?php for ($i=0;$i < count($makes); $i++) {?>
                            <option><?=$makes[$i];?></option>
                        <?php } ?>
                    </select>


                    <select size="7" name="vehicle-model" class="invisible">
                        <?php for ($i=0;$i < count($models); $i++) {?>
                            <option><?=$models[$i];?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </section>
        <section class="show-services hidden">
            <h2>What do you want done?</h2>
            <ul class="unstyled">
            <?php
               foreach($services as $key => $service){
            ?>
               <li> <input type="checkbox"> <h2><?=$key;?></h2> </li>
            <?php
               }
            ?>
            </ul>
        </section>
    </form>
<?php require 'partials/footer.php';?>