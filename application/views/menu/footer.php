<!--.footer-->
<hr>
    <div id="footer">
      <div class="footerText">Type somethings in here...</div>
      <div class="footer-column">
          <nav>
              Term<br>
              Privacy<br>
              Support<br>
              Help<br>
          </nav>
      </div>
      <div class="footer-column">
          <nav>
              About Us<br>
              Contact Us<br>
              Blog<br>
          </nav>
      </div>
    </div>
</div>

</div>
</body>
</html>


<!-- sidebar
<script type="text/javascript">
$(document).ready(function () {
    $('#dismiss, .overlay').on('click', function () {
        // hide sidebar
        $('#sidebar').removeClass('active');
        // hide overlay
        $('.overlay').removeClass('active');
    });
    $('#showSidebar').on('click', function () {
        // open sidebar
        $('#sidebar,.items').addClass('active');
        // fade in the overlay
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});
</script>
-->

<!-- next and back button in header -->
<script>
var  picture_file_names  = [ "../images/slide1.jpg",
                         "../images/slide2.jpg"] ;
var  picture_index = 0 ;
function show_next_picture()
{
picture_index ++ ;
if ( picture_index >= picture_file_names.length )
{
  picture_index = 0 ;
}
var image_element = document.getElementById( "image_element_id" ) ;
image_element.src = picture_file_names[ picture_index ] ;
}
function show_previous_picture()
{
picture_index -- ;
if ( picture_index < 0 )
{
  picture_index = picture_file_names.length - 1 ;
}
var image_element = document.querySelector( '#image_element_id' ) ;
image_element.src = picture_file_names[ picture_index ] ;
}
</script>

<!--add to cart-->
<script src="../index.js"></script>
