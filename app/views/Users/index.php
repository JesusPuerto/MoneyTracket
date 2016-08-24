<!-- Vista index-->
<div class="row">
	<div class="col s12 m12 l12">
<table class="highlight responsive-table">
	<h2>Listado de usuarios</h2>
	<thead>
	  <tr>
	    	<th>ID</th>
		    <th>Nombre de usuario</th>
				<th>Rol</th>
				<th>Action</th>
	  </tr>
	</thead>
	<tbody>
<?php foreach ($users as $user ): ?>
    <tr>
		    <td><?php echo $user['id']; ?></td>
		    <td><?php echo $user['username']; ?></td>
		    <td><?php echo $user['rol']; ?></td>
		    <td>
		        <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>"></a>
		        <a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user["id"]; ?>"></a>
        </td>
	  </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
