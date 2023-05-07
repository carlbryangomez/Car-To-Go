<!-- Hero Section  -->
<style>
  #hero  {
  background-size: cover;
  background-position: top center;
  position: relative;
  z-index: 1;
}
/* #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
} */

video.fullscreen {
  position: absolute;
  z-index: -2;
  object-fit: cover;
  width:100%;
  height:100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  &::-webkit-media-controls {
     display:none !important;
  }
}
</style>
  <section id="hero">
    <div class="hero container">    
    <video class="fullscreen" src="vid/bg.mp4" playsinline autoplay muted loop>
  </video> 
      <div>
        <h1>Rent a car <span></span></h1>
        <h1>at the  <span></span></h1>
        <h1>Best Price <span></span></h1>
        <br>
        <a href="signup-user.php" class="button" style="display: inline-block; padding: 10px 30px; color: white; background-color:transparent; border: 2px solid darkgoldenrod; font-size: 2rem; text-transform: uppercase; letter-spacing: 0.1rem; margin-top: 30px; transition: 0.3 ease; transition-property: background-color, color;">Sign Up</a>
      </div>
    </div> 
  </section>
</body>
  <!-- End Hero Section  -->