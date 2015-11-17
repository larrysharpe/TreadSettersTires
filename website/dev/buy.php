<?php require 'partials/header.php';?>
    <section class="width-container">
        <h1>Buy Used Tires</h1>
        <form method="post" >
            Rim Size:
            <select>
                <option value=""> --- </option>
                <?php for ($i = 13; $i <= 26; $i++){?>
                    <option><?=$i;?></option>
                <?php } ?>
            </select>
        </form>
    </section>
<?php require 'partials/footer.php';?>
