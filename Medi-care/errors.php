<?php  if (count($errors) > 0) : ?> 

  <div class="error">

  	<?php foreach ($errors as $error) : ?> <!--Assigning error values through foreach loop-->

  	  <p><?php echo $error ?></p> <!--Showing error-->

  	<?php endforeach ?> <!--Loop end-->

  </div>

<?php  endif ?>