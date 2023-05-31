<!--? ======== FOOTER ======== -->
<footer class="footer">
  <div class="footer-left">
    <!-- <a href="./index.php"><img src="./assets/images/robb.jpg" /></a> -->
    <p>
    We are official Website of Routine Of Baglung Banda. We are an online news website that brings you quick and easy access to breaking news, informative articles, and in-depth analysis on a range of topics. Our team of experienced journalists covers politics, business, technology, sports, entertainment, and lifestyle.
    </p>
    <div class="socials">
      <a href="https://www.facebook.com/profile.php?id=100092285229952" target="_Blank"><i class="fab fa-facebook"></i></a>
      <!-- <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a> -->
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
  <ul class="footer-right">
    <li>
      <h2>Quick Links</h2>
      <ul class="box">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./categories.php">Categories</a></li>
        <li><a href="./bookmarks.php">Bookmarks</a></li>
        <li><a href="./search.php?trending=1">Trending</a></li>
      </ul>
    </li>
    <li>
      <h2>Categories</h2>
      <ul class="box">
        <?php

          // Category Query to fetch random 3 categories
  	      $categoryQuery= " SELECT  category_id, category_name
                            FROM category 
                            ORDER BY RAND() LIMIT 3";

          // Running Category Query
          $result = mysqli_query($con,$categoryQuery);

          // Returns the number of rows from the result retrieved.
          $row = mysqli_num_rows($result);


          // If query has any result (records) => If there are categories
          if($row > 0) {

          // Fetching the data of particular record as an Associative Array
          while($data = mysqli_fetch_assoc($result)) {

            // Storing the category data in variables
            $category_id = $data['category_id'];
            $category_name = $data['category_name'];
            
        ?>
        <li><a href="articles.php?id=<?php echo $category_id ?>"><?php echo $category_name ?></a></li>
        <?php  
              }
            }
          ?>
        <li><a href="./categories.php">More +</a></li>
      </ul>
    </li>
    <li>
      <h2>Join Us</h2>
      <ul class="box">
        <li>
        Join our online news website today and stay informed about the latest and most relevant news from around the world! Our platform provides quick and easy access to breaking news, informative articles, and in-depth analysis on a range of topics.
        </li>
        <a href="./author-login.php" class="my-1 btn btn-secondary">Sign Up</a>
      </ul>
    </li>
  </ul>
  <div class="footer-bottom">
    <p>All Rights Reserved by &copy; <a href="mailto:mainali.aswin88@gmail.com" target="blank">AswinCodes</a> <?php echo date("Y")?></p>
  </div>
</footer>

<!-- JQUERY SCRIPT -->
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<!-- SCRIPT FOR BACK TO TOP BUTTON -->
<script src="../assets/js/back-to-top.js"></script>

<!-- SCRIPT FOR NAVBAR COLLAPSE -->
<script src="../assets/js/navbar-collapse.js"></script>
</body>

</html>