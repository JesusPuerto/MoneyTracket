<!-- Vista para inicio de sesion-->
<br>
<br>
<br>
<br>
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>users/login" method="POST">
<div class="row">
  <div class="col s12 m8 l8 l2 ">
    <h5 class="center-align">Money Traking</h5>
  </div>
</div>
<div class="row">
  <div class="col s12 m8 l8 l2">
    <div class="col s12 m12 l12">
      
      <input id="username" type="text"  name="username">
      <label for="username">Nombre de Usuario</label>
    </div>
    <div class="input-field col s12 m12 l12">
      
      <input id="pass" type="password"  name="password">
      <label for="pass">Introduce tu contraseña</label>
    </div>
    <div class="input-field col s12 m12 ">
       <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Recordar mis datos</label>
    </div>
  </div>
</div>
<div class="row center-align">
  <div class="col s12 m8 l8 l2">
    <div class="col s12 m12 l12 ">
      <button  type="submit" name="action">Enviar
        
      </button>
    </div>
  </div>
</div>
</form>
