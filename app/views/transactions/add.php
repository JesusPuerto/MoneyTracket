<!-- Vista para añadir-->

    <form class="col s12 m12 l12" action="<?php echo APP_URL; ?>transactions/add" method="POST">
      <div class="row">
      <div class="input-field col s12 m6 l6">
						<select name="account_id">
            <option value="" disabled selected>Elige la cuenta</option>
<?php foreach ($accounts as $account): ?>
            <option value="<?php echo $account["id"]; ?>"> <?php echo $account["name"]; ?></option>
<?php endforeach; ?>
            </select>
            <label>Nombre de la cuenta: </label>
        </div>
        <div class="input-field col s12 m6 l6">
            <select name="category_id">
<?php foreach ($categories as $category): ?>
            <option value="<?php echo $category["id"]; ?>"> <?php echo $category["name"]; ?></option>
<?php endforeach; ?>
            </select>
            <label>Categoria de transaccion:</label>
         </div>
       </div>
        <div class="row">
           <div class="input-field col s12 m12 l12">
            <input type="text" name="description">
            <label for="description" class="validate" >Description: </label>
          </div>
				</div>
        <div class="row">
          <div class="input-field col s12 m12 l6">
            <input type="number" name="amount">
            <label for="amount" class="validate">Monto: </label>
          </div>
          <div class="input-field col s12 m12 l6">
            <input type="date" name="date">
             <label for="amount" class="validate">Fecha: </label>
          </div>
        </div>
        <div class="row">
        <div class="col s12 m12 l12">
          <button  type="submit" name="add" value="Save">Enviar
          </button>
				</div>
      </div>
</form>
