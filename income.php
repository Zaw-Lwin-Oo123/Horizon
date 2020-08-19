<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Income</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="income.css"> -->
  <!-- bootstrap CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bggradient.css"> 

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

</head>
<body style="background-image: url('https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;font-family: 'Poppins', sans-serif;background-attachment: fixed" >
  <form action="insert_income_data.php" method="POST" class="py-4">
    <div class="formb">
    <div class="container rgba-gradient text-light">
     
      <h2 class="text-center">Add Income</h2>
      <div class="form-group">
        <label>Date (mm/dd/yy)</label>
        <input class="form-control" type="date" value="<?php echo $today; ?>" name="date" required="true">
      </div>
      <label class="">Category</label>
      <div class="form-group has-success">
            <select name="category" class="form-control" id="category">
            <option selected hidden disabled>Choose Category</option>
            <?php
            include('conf.php');
      
            $sql = "SELECT * FROM category WHERE type_id=1";
            $get =$conn->query($sql);

            while($row = mysqli_fetch_assoc($get))
              {
            ?>
                <option value = "<?php
                $name = $row['catname'];
                echo($name)?>" >
                <?php echo( $name) ?>
                </option>
                <?php
              }
            ?>
            </select>
      </div>
      <div class="form-group">
        <label>Amount</label>
        <div class="input-group">
          <input type="text" class="form-control" name="amount" required="true" maxlength="20">
            <div class="input-group-append">
              <span class="input-group-text bg-primary text-light">MMK</span>
            </div>
        </div>
        <br>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </div> 
   <div>
 </div>
</form>
<script>

// $(".formattedNumberField").on('keyup', function(){
//     var n = parseInt($(this).val().replace(/\D/g,''),10);
//     $(this).val(n.toLocaleString());
// });

</script>
</body>
</html>