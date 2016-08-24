<!-- Vista para añadir-->
<h2>Añadir Cuentas</h2>
<div class="row">
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>accounts/add" method="POST">
  <div class="row">
    <div class=" input-field col s12 m12 l12">
    <input id="name" type="text" class="validate" name="name">
    <label for="name">Name: </label>
  </div>
</div>
<div class="row">
     <div class="input-field col s12 m12 l12">
      <select name="user_id" >
        <option value="" disabled selected>Elige el usuario</option>
<?php foreach ($users as $user): ?>
        <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
<?php endforeach; ?>
      </select>
     </div>
  </div>
   <div class="row">
     <div class="col s12 m12 l12">
      <button  name="add" value="Save">Enviar
      </button>
    </div>
  </div>
</form>
</div>
