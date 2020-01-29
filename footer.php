  <script type="text/javascript" src="<?php print $base_url; ?>/js/jquery-3.4.1.min.js"></script>

  <script type="text/javascript" src="<?php print $base_url; ?>/js/popper.min.js"></script>

  <script type="text/javascript" src="<?php print $base_url; ?>/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php print $base_url; ?>/js/mdb.min.js"></script>

  <script type="text/javascript">
    //************* Animations initialization ******************//
    new WOW().init();

    $(document).on("click", ".addToCart", function(){
      var contador = $("#contador").text();
      contador = Number(contador) + 1;
      $("#contador").text(contador);
    });


  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  //****************Animation End ***************************/

  var base_url = "<?php print $base_url; ?>";
  </script>

  <script type="text/javascript" src="<?php print $base_url; ?>/js/funciones.js"></script>
</body>

</html>
