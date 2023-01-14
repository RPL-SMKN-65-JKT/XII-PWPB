<footer>
  <div class="foot-item">
    
  <div class="contact">
      <div class="maps">
          <img src="https://img.icons8.com/ios-filled/50/eeeeee/globe-asia.png" />
          <p>Jakarta,Indonesia</p>
      </div>
      <div class="call">
          <img src="https://img.icons8.com/ios-filled/50/eeeeee/phone.png"/>
          <p>+62 858 9225 9027</p>
      </div>
  </div>

    <div class="kotak">
      <form method="post" action="<?php echo BASEURL; ?>/home/message">
      <input type="email" name="nama" style="width: 200px; height: 25px; background-color: #EEEEEE;border: 0px;outline: none; border-radius: 10px;margin-bottom: 3%;" required placeholder="example@gmail.com"><br>
      <input type="text" name="" style="width: 300px; height: 100px; background-color: #EEEEEE;border: 0px;outline: none; border-radius: 10px;" ><br>
      <button type="submit" style="border: 0px; outline: none; background-color: #F9B5D0; width: 100px; border-radius: 22px; margin-top: 3%;" >Send</button>
    </form>
    </div>
    
  </div>

</footer>





 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>
  <script type="text/javascript">
      $(document).ready(function(){
        $(".about").hide();
        $("#but").click(function(){
            $(".isi").fadeToggle("slow");
        })
      })

       var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
  </script>
</html>