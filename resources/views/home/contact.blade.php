<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
                <h3>Contact Us</h3><br>
                <p>
    				Caracas - Venezuela<br/>
            <!--
    				Web Development Company in Pune,<br/>
                    B4, Patang Plaza Phase 5,<br/>
                    Opp. PICT College,<br/>
                    Katraj, Pune, India - 411046
                    -->
                </p>
      			<div class="contact-link"><i class="fa fa-envelope-o"></i> <a href="mailto:timeoutve@gmail.com">timeoutve@gmail.com</a>
            </div>
      			<div class="contact-link"><i class="fa fa-cube"></i> <a href="http://timeout.org.ve">timeout.org.ve</a></div>
            <div class="redes-footer">
              <a class= "" href="#">
                <i class="fa fa-facebook"></i>
              </a>
              <a class= "" href="#">
                <i class="fa fa-twitter"></i>
              </a>
              <a class= "" href="#">
                <i class="fa fa-instagram"></i>
              </a>
            </div>
      			
         </div>
        <div class="col-lg-7">
            <h3>Contacta con Nosotros</h3>
            <br>
              {!!Form::open(['route'=>'mail.store', 'method'=>'POST'])!!}
            <div class="form-group">
              {!!Form::label('name', 'Nombre' )!!}
              {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre'])!!}
            </div>
            <div class="form-group">
              {!!Form::label('email', 'Email' )!!}
              {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])!!}
            </div>
             <div class="form-group">
              {!!Form::label('mensaje', 'Mensaje' )!!}
              {!!Form::textarea('mensaje', null, ['class' => 'form-control', 'placeholder' => 'Mensaje'])!!}
            </div>
            {!!Form::submit('Enviar', ['class' => 'btn btn-large btn-success'])!!}
            {!!Form::close()!!}
          </div>
    </div>
</div>