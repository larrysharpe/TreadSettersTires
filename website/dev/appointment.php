<?php require 'partials/header.php';?>
    <section class="width-container">
        <h1>Schedule an Appointment With Tread Setters</h1>
        <div>
            <h2>What Kind Of Car Do You Have</h2>
            <div>
                <select size="7" name="vehicle-year">
                    <?php for ($i=date('Y');$i> date('Y')-25; $i--) {?>
                        <option><?=$i;?></option>
                    <?php } ?>
                </select>

                <select size="7" name="vehicle-make">
                    <?php for ($i=date('Y');$i> date('Y')-25; $i--) {?>
                        <option><?=$i;?></option>
                    <?php } ?>
                </select>


                <select size="7" name="vehicle-model">
                    <?php for ($i=date('Y');$i> date('Y')-25; $i--) {?>
                        <option><?=$i;?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </section>
<?php require 'partials/footer.php';?>