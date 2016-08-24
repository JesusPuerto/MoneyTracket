<div class="row">
      <div class="col s12 m5">
        <ul class="collapsible" data-collapsible="accordion">
     <li>
       <div class="collapsible-header"></i>Mensaje del sistema!! </div>
       <div class="collapsible-body"><p><?php if (isset($_SESSION['username'])): ?>Bienvenido <?php echo $_SESSION['username']; ?>!  <?php endif; ?></p></div>
     </li>
   </ul>
      </div>
    </div>
