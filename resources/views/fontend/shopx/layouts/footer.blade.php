<footer>
    <div style="margin-top: -20px;" class="container">
      <div class="row">
        <div class="col-sm-8 col-12">
          <div class="footer-left">

            <p>Copyright © 2023 <span><a style="color: white;margin-right: 10px;" href="#">Shopix.com.bd</a></span>  All rights reserved. <span><a style="color: white; margin-right: 10px;"  href="#">Privacy Policy</a></span> <span><a style="color: white;margin-right: 10px;"  href="#">Terms and Condition</a></span>  <span><a style="color: white;margin-right: 10px;"  href="#">Return & Refund Policy</a></span> </p>
          </div>
        </div>
        <!-- col end -->
        <div class="col-sm-4 col-12">
          <div style="text-align: right;" class="footer-right">
            <ul>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon.png" alt=""></li>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon2.png" alt=""></li>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon3.png" alt=""></li>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon4.png" alt=""></li>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon6.png" alt=""></li>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon7.png" alt=""></li>
              <li><img style="height: 25px;margin-right: 10px;" src="{{ asset('fontend/shopx/') }}/images/Payment method icon8.png" alt=""></li>

            </ul>

          </div>
        </div>
        <!-- col end -->
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  <script type="text/javascript">
    $(document).ready(function() {
      $("#lightSlider").lightSlider();
    });
  </script>



<!-- all script here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('fontend/shopx/') }}/js/all.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/grt-youtube-popup.js"></script>
{{-- <script src="{{ asset('fontend/shopx/') }}/js/jquery.syotimer.min.js"></script> --}}
<script src="{{ asset('fontend/shopx/') }}/js/select2.min.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/script.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/popup.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/navh.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/time.js"></script>
<script src="{{ asset('fontend/shopx/') }}/js/review.js"></script>
<!-- bootstrap js -->



<script src="{{ asset('fontend/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{ asset('fontend/assets/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script>
    $(".youtube-link").grtyoutube({
      autoPlay: true,
      theme: "dark",
    });
  </script>
  <script>
      $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:5,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }
        });
      });
    </script>



<script src="{{ asset('fontend/mobozone') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('fontend/mobozone') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('fontend/mobozone/') }}/assets/pics/main.js"></script>


<script src="{{ asset('fontend/mobozone') }}/assets/js/main.js"></script>


@yield('extraJs')

</body>




</html>
