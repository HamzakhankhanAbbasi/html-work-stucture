<footer class="footerWrap bgBlack">
  <div class="container">
    <div class="logo text-center">
      <a href="index.php">
        <img src="assets/images/hypno-logo.png" alt="logo">
      </a>
    </div>
    <ul class="footerLinks">
        <li> <a href="#">Narrative</a> </li>
        <li> <a href="meet-ar.php" class="active">Meet AR</a> </li>
        <li> <a href="#">Specialties</a> </li>
        <li> <a href="#">Appointments</a> </li>
        <li> <a href="#">Buzz/Query</a> </li>
        <li> <a href="#">Store</a> </li>
    </ul>
    <div class="socialLinks">
      <a href="#"> <span><i class="fab fa-facebook-f"></i></span>  </a>
      <a href="#"> <span><i class="fab fa-instagram"></i></span> </a>
      <a href="#"> <span><i class="fab fa-twitter"></i></span> </a>
      <a href="#"> <span><i class="fab fa-pinterest-p"></i></span> </a>
    </div>
    <div class="copyRightBar text-center">
      <p>Copyright © 2021 HypnoAR. The Hypnotherapy & Recovery Center. All rights reserved.</p>
    </div>
  </div>
  <img src="assets/images/footer-left-arc.png" alt="arc" class="footerLeftArc">
  <img src="assets/images/footer-right-arc.png" alt="arc" class="footerRightArc">
</footer>
<audio id="audioPlay">
  <source src="assets/audio/hypnoar-new-audio.mp3" autoplay="autoplay" type="audio/mp3">
</audio>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    AOS.init();
  </script>
  
  <!-- Onload Animation Scripts Starts -->
  <script>
    var myEl = document.getElementById("starter");
    myEl.addEventListener('click', function() {
        showTime();
    });
    function showTime()
    {
      var curtain = document.getElementById("loadcurtain");
      curtain.className = "open";
      
      var scene = document.getElementById("scene");
      scene.className = "expand";
      
      var starter = document.getElementById("starter");
      starter.className = "fade-out";
      
      setTimeout(function() {
            starter.style.display = 'none';
        }, 2000);
    }
  </script>
  <!-- Onload Animation Scripts Starts -->
  <!-- On click audio play starts -->
  <script>
        var play = document.getElementById("starter");
        var track = document.getElementById("audioPlay");
        play.onclick = function(){
            if(track.paused){
                track.play();
            }
        }
  </script>
  <!-- On click audio play ends -->

</body>

</html>