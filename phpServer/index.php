<html>
  <head>
    <title>Home Net</title>
    <link rel="icon" type="image/x-icon" href="<?php echo ((!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']); ?>/static/favicon.ico">
    <link rel="stylesheet" href="<?php echo ((!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']); ?>/static/bootstrap.min.css">
  </head>
<?php

$myfile = fopen("./gg.txt", "r");
$gg = fread($myfile,filesize("./gg.txt"));
fclose($myfile);

$rc  = $gg[0];
$wh  = $gg[1];

$myfile = fopen("./tt.txt", "r");
$time = fread($myfile,filesize("./tt.txt"));
fclose($myfile);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $myfile = fopen("./tt.txt", "r");
  $time = fread($myfile,filesize("./tt.txt"));
  fclose($myfile);

  $rc = $wh = "0";

  if (isset($_POST['rc'])) {
        $rc = "1";
    }
  if (isset($_POST['wh'])) {
        $wh = "1";
    }

  $myfile = fopen("./gg.txt", "w");
  fwrite($myfile, $rc);
  fwrite($myfile, $wh);
  fclose($myfile);
}

?>

<body style="font-family: Verdana, Geneva, Tahoma, sans-serif; padding: 15px; text-align: center; color: aliceblue;">

  <div class="bg-image"></div>



  <div id='wrap' >
    Last Ping : <?php echo $time; ?>

    <br><br>
    <form action="<?php echo ((!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']); ?>/index.php" method="post">
      Rice Cooker:
      <label class="switch">
      <input type="checkbox" id="rcCheck" name="rc" >
      <span class="slider round"></span>
      </label> <br><br>

      Water Heater:
      <label class="switch">
      <input type="checkbox" id="whCheck" name="wh" >
      <span class="slider round"></span>
      </label> <br>
    <br><br>
    <button type="submit" name="submit" value="True" class="btn btn-primary btn-lg"> Submit </button> </form>
  </div>

  



<script>
  var dateSpa1 = document.getElementById('rcCheck');
  var dateSpa2 = document.getElementById('whCheck');
  
  if ('<?php echo $rc; ?>'=='1'){
    dateSpa1.checked = true;
  }
  if ('<?php echo $wh; ?>'=='1'){
    dateSpa2.checked = true;
  }
</script>

<style>

#wrap {
  text-align: center;
  width: 50%;
  height: auto;
  
  font-size:large;

  margin-left: auto;
  margin-right: auto;
  margin-top: 10%;
  margin: auto;
  padding-top: 2%;
}

.bg-image {
  /* The image used */
  background-image: url("<?php echo ((!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']); ?>/static/gg.jpg");
  position: absolute;
  z-index: -100;

  /* Add the blur effect */
  filter: blur(10px);
  -webkit-filter: blur(10px);

  /* Full height */
  height: 98vh;
  width: 98vw;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

   /* The switch - the box around the slider */
  .switch {
    margin-right: 20%;
    float:right ;
    position: relative;
    width: 60px;
    height: 34px;
  }
  
  /* Hide default HTML checkbox */
  .switch input {display:none;}
  
  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #2196F3;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
  </style>

</body>


</html>

