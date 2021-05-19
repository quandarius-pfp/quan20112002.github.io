<div id="home">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/banner.jpg" width="100%" height="700px">
     
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/banner 2.jpg" style="width:100%" width="100%" height="700x">
      
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/banner 3.jpg" width="100%" height="700x">
      
    </div>
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/banner4.png" width="100%" height="700px">
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/banner 5.jpg" width="100%" height="700px">
        
      </div>
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/banner 6.jpg" width="100%" height="700px">
        
      </div>

    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
      <span class="dot" onclick="currentSlide(6)"></span> 


    </div>
    
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
</div>