<!-- Vista index-->
<div class="row">
  <div class="col s12 m12 l12">
<table class="replace responsive-table">
  <h2>Listado de cuentas</h2>
  <thead>
  <table class = "table-horver">
    <tr>
				<th>ID</th>
				<th>ID del usuario</th>
				<th>Nombre</th>
				<th>Action</th>
		</tr>
  </thead>
  <tbody>
<?php foreach ($accounts as $account ): ?>
    <tr>
		    <td><?php echo $account['id']; ?></td>
				<td><?php echo $account['user_id']; ?></td>
				<td><?php echo $account['name']; ?></td>
				<td>
		    		<a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">editar</a>
        		<a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>"></a>
		    </td>
		</tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</table>