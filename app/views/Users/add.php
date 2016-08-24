<!-- Vista para añadir-->
<form action="<?php echo APP_URL; ?>users/add" class="col s12 m12 l12" method="POST">
    <div class="row">
      <div class="input-field col s12 m12 l6">
        <input id="username" type="text" name="username" class="validate">
        <label for="username">Username:</label>
      </div>

      <div class="input-field col s12 m12 l6">
        <input id="password" type="password" name="password" class="validate">
        <label for="password" >Password: </label>
    </div>
</div>
<div class="row">
      <div class="input-field col s12 m12 l12">
        <input id="rol" type="text" name="rol" class="validate">
        <label for="rol">Rol </label>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12">
        <button  type="submit" name="add" value="save">Enviar
  </div>
  </div>
</div>
</form>
