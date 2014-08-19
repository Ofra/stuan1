	</section>
<footer>
			<h4>SINDICATO DE TRABAJADORES DE LA UNIVERSIDAD AUTÓNOMA DE NAYARIT “STUAN”</h4>
			<section>
				
				<div id="foot1">
					<h5>Contáctanos</h5>
					<p>Teléfono de oficina (311)-133-10-45</p>
					<p>stuantepicnayarit@gmail.com</p>	
				</div>
				<div id="foot2">
					<h5>Síguenos</h5>
					<a href="https://www.facebook.com/StuanTepic?ref=tn_tnmn" class="icon-facebook"></a>
					<a href="https://www.youtube.com/channel/UCfCn_OCORw6YNdip3ThiBxw/feed" class="icon-youtube2"></a>
				</div>
				<div id="foot3">
					<h5>Visítanos</h5>
					<p>Calle sierra de picachos #16 (entre Sanguangüey y sierra de Álica)<br /> Colonia Jardines de la cruz</p>
				</div>
			</section>
		</footer>	
	</body>
</html>


<script type="text/javascript" src="js/vermas.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>



<script type="text/javascript" src="js/jMyCarousel.min.js"></script>
<script type="text/javascript" src="js/jMyCarousel.js"></script>
<script type="text/javascript">

 $(document).ready(function() {
    $(".jMyCarousel").jMyCarousel({ // Script de los Thumbnails
    visible: '100%',
    eltByElt: true
    });

$(".jMyCarousel img").fadeTo(100, 0.6);
$(".jMyCarousel a img").hover(
    function(){ //mouse over
       $(this).fadeTo(400, 1);
    },
    function(){ //mouse out
      $(this).fadeTo(400, 0.6);
    });
});
</script>

<script type="text/javascript" src="js/insertar_tags.js"></script>
<script type="text/javascript">
	

  $(document).ready(function(){ // Script de la Galeria
    $('#contenido_galeria div').css('position', 'absolute').not(':first').hide();
    $('#contenido_galeria div:first').addClass('aqui');
    $('.jMyCarousel a').click(function(){
        $('#contenido_galeria div.aqui').fadeOut(400);
        $('#contenido_galeria div').removeClass('aqui').filter(this.hash).fadeIn(400).addClass('aqui');
        return false;
    });
 });



</script>
