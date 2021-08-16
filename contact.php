<?php 

include_once("header.php")

?>

<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Dynamic%20Layers&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com/"></a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div>
<section class="contact-section bg-grey padding">
<div class="dots"></div>
<div class="container">
<div class="contact-wrap d-flex align-items-center row">
<div class="col-md-6 padding-15">
<div class="contact-info">
<h2>ESCRIBENOS PARA INFORMAR ALGUN RESCATE</h2>
<p>puedes escribirnos para dudas, rescates y abuso aniamles que ocurran</p>
<h3>piantini esquina cuba con san isidro <br>#58</h3>
<h4><span>Email:</span> patitasfelices@gmail.com <br> <span>Phone:</span> 849-653-8833 <br> <span>Fax:</span> 12-849-653-8833</h4>
</div>
</div>
<div class="col-md-6 padding-15">
<div class="contact-form">
<form method="post" name="contacto"  class="form-horizontal">
<div class="form-group colum-row row">
<div class="col-sm-6">
<input type="text" id="name" name="nombre" class="form-control" placeholder="Nombre" required>
</div>
<div class="col-sm-6">
<input type="email" id="email" name="correo" class="form-control" placeholder="Correo" required>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<textarea id="message" name="mensaje" cols="30" rows="5" class="form-control message" placeholder="Mensaje" required></textarea>
</div>
</div>
<div class="form-group row">
<div class="col-md-12">
<button id="submit" class="default-btn" name="enviar" type="submit">Enviar Mensaje</button>
</div>
</div>
<div id="form-messages" class="alert" role="alert"></div>
</form>

<?php 

include_once("registrocontacto.php")

?>
</div>
</div>
</div>
</div>
</section>

<?php 

include_once("footer.php")

?>