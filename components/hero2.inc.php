<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!-- Hero Section  -->
<style>
  #hero  {
  background-size: cover;
  background-position: top center;
  position: relative;
  z-index: 1;
}

video.fullscreen {
  position: absolute;
  z-index: -2;
  object-fit: cover;
  width:100%;
  height:100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  }
  &::-webkit-media-controls {
     display:none !important;
  }

</style>
  <section id="hero">
    <div class="hero container">    
    <video class="fullscreen" src="vid/bg.mp4" playsinline autoplay muted loop>
  </video> 
      <div>
        <h1>Hi! Welcome to <span></span></h1>
        <h1>Car-To-Go  <span></span></h1>
        <h1><?php echo $fetch_info['firstname'] ?> <span></span></h1>
      </div>
    </div> 
  </section>
</body>
  <!-- End Hero Section  -->