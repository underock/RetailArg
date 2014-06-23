<?php 

	function weExcelIn($colum=4,$datos){
		
		# Columnas
		$colums = array(6,4,3);
		
		if($colum==2) $colum = 0;
		if($colum==3) $colum = 1;
		if($colum==4) $colum = 2;
		
		if(isset($datos) && is_array($datos)){
			
			echo '<div class="row">';
			
				for($i = 0; $i < count($datos); $i++){
					
					echo '<div class="col-md-'.$colums[$colum].'">';
					
						echo '<div class="services-box">';
						
							echo '<div class="services-icon">';
							
								echo '<i class="icon-'.$datos[$i]['icon'].' animated" data-type="rotateIn"></i>';
								
							echo '</div>';
							
							echo '<h4>'.$datos[$i]['title'].'</h4>';
							echo '<p>'.$datos[$i]['description'].'</p>';
					
						echo '</div>';
						
					echo '</div>';
					
				}
			
          	echo '</div>';
	
		}
	
	}

?>

