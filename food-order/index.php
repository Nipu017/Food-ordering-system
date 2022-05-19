<?php include('partials-front/menu.php'); ?>

<!-- fOOD sEARCH Section Starts Here -->
<section class="food-search text-center">
    <div class="container">

        <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
            <input type="search" name="search" placeholder="Search for Food.." required>
            <input type="submit" name="submit" value="Search" class="btn btn-primary">
        </form>

    </div>
</section>
<!-- fOOD sEARCH Section Ends Here -->

<?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

<!-- Food Welcome Section Starts Here  -->
<section class="center-section">

    <div class="welcome-section text-center">
        <div class="container">
            <h1>WELCOME TO OUR RESTAURANT</h1>
            <p>“This website offers us the best quality food and beverages at a reasonable price, and here is all natural
                and organic product which is directly from the farm. They also maintain the food ecosystem. They have the
                delivery option for different appetite. They also have the chilled facility to maintain the maximum
                freshness of the food.”</p>
            </div>
        </div>
        
        <div class="explore-box text-center">
            <div class="explore-chip">
                <a href="<?php echo SITEURL; ?>categories.php"><h2 >Explore Category</h2></a>
            </div>
            <div class="explore-chip">
                <a href="<?php echo SITEURL; ?>foods.php"><h2>Explore Food</h2></a>
            </div>
        </div>
        
</section>
<!-- Food Welcome Section Ends Here  -->


<?php include('partials-front/footer.php'); ?>