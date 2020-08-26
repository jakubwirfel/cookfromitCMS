<?php include 'inc/header.php';?>
<?php include 'inc/navbar.php';?>
    <main class="main-box">
        <section class="section">
            <h1>User section</h1>
            <div class="grid">
                <?php foreach($addons as $addon):
                    if($addon -> category === '1'):?>
                        <div class="grid-item">
                            <div class="icon">
                                <?php echo $addon -> image?>
                            </div>
                            <span><?php echo $addon -> name?></span>
                        </div>
                    <?php endif;
                endforeach;?>
            </div>
        </section>
        <section class="section">
            <h1>Recipe section</h1>
            <div class="grid">
                <?php foreach($addons as $addon):
                    if($addon -> category === '2'):?>
                        <div class="grid-item">
                            <div class="icon">
                                <?php echo $addon -> image?>
                            </div>
                            <span><?php echo $addon -> name?></span>
                        </div>
                    <?php endif;
                endforeach;?>
            </div>
        </section>
        <section class="section">
            <h1>Tips section</h1>
            <div class="grid">
                <?php foreach($addons as $addon):
                    if($addon -> category === '3'):?>
                        <div class="grid-item">
                            <div class="icon">
                                <?php echo $addon -> image?>
                            </div>
                            <span><?php echo $addon -> name?></span>
                        </div>
                    <?php endif;
                endforeach;?>
            </div>
        </section>
        <section class="section">
            <h1>Logs section</h1>
            <div class="grid">
                <?php foreach($addons as $addon):
                    if($addon -> category === '4'):?>
                        <div class="grid-item">
                            <div class="icon">
                                <?php echo $addon -> image?>
                            </div>
                            <span><?php echo $addon -> name?></span>
                        </div>
                    <?php endif;
                endforeach;?>
            </div>
        </section>
    </main>
    <?php displayMessage();?>
</body>
<script>
$(document).ready(function() {
    $('.alert-box').delay(5000).fadeOut(1000); // 5 seconds x 1000 milisec = 5000 milisec
});
</script>
</html>