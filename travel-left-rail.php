         <div class="panel panel-default">
           <div class="panel-heading">Search</div>
           <div class="panel-body">
             <form>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="search ...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span>          
                    </button>
                  </span>
               </div>  
             </form>
           </div>
         </div>  <!-- end search panel -->       

<?
        asort($continents);
        echo '<div class="panel panel-info">';
          echo '<div class="panel-heading">Continents</div>';
          echo '<ul class="list-group">';
            foreach ($continents as $value)
            {
              echo '<li class="list-group-item"><a href="#">' . $value . '</a></li>';
            }
          echo '</ul>';
          echo'</div>'; // end continents panel

        asort ($countries);
        echo '<div class="panel panel-info">';
          echo '<div class="panel-heading">Popular Countries</div>';
          echo '<ul class="list-group">';
            foreach ($countries as $key => $value)
            {
              if ($key == $selectMenu)
              {
                echo '<li class="list-group-item active"><a href="#">' . $value . '</a></li>';
              }
              else
              {
                echo '<li class="list-group-item"><a href="#">' . $value . '</a></li>';
              }
            }
          echo '</ul>';
          echo'</div>'; // end countries panel

?>
