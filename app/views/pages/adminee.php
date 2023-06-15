<?php
include('../insert/footer.php');
?>
<?php
if(isset($_POST['submit'])) {
  // count total files
  $countfiles = count($_FILES['files']['name']);
  // prepared statement
  $query = "INSERT INTO product(productImage,productName) VALUES(?,?)";
  $statement = $conne->prepare($query);

  // loop all files
  for($i = 0;$i<$countfiles;$i++) {
    // Image name
    $file_name = $_FILES['product']['name']['$i'];
    // location of file
    $target_file = "products".$filename;
    // Image extension
    $file_extension = pathinfo($target_file,PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    // valid file extensions
    $valid_extension = array("png,jpeg,jpg");
    if(in_array($file_extension,$valid_extension)) {
      // upload file
      if(move_uploaded_file($_FILES['product']['tmp_name'][$i],$target_file)) {
        // execute query
        $statement->execute(array($file_name,$target_file));
      }

    }
  }

}
?>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="submit" name="submit" value="upload">
    </form>
    
<!-- ======= Footer ======= -->
<?php
include('../insert/footer.php');
?>
<!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>