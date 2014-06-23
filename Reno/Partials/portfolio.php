<?php
function portfolio($colum = 2, $title = 'Productos', $datos){

	if(isset($datos) && is_array($datos)){

		echo '<div class="row">';
			
			echo '<div class="col-md-12">';
			
				# Categorias
				if(isset($datos['category']) && is_array($datos['category'])){
					
					# Lista
					echo '<ul id="portfolio-filter">';
					
						# General
						echo '<li class="act"><a href="#" class="filter" data-filter="*">Todos</a></li>';
					
						for($i = 0; $i < count($datos['category']); $i++){
						
							echo '<li><a href="javascript:void(0);" class="filter" data-filter=".'.$datos['category'][$i].'">'.$datos['category'][$i].'</a></li>';
						
						}
					
					echo '</ul>';
					
				}
	
				# Productos
				echo '<section class="row" id="portfolio-items">';
				
					echo '<ul class="portfolio">';
					
						for($i = 0; $i < count($datos['items']); $i++){
						
							echo '<li>';
							
								echo '<article class="col-md-3 project" data-tags="'.$datos['items'][$i]['category'].'">';
									
									echo '<div class="project-item-isotope">';
										
										echo '<div class="project-image">';
										
											echo '<img src="img/media/'.$datos['items'][$i]['image'].'">';
											
											if(isset($datos['items'][$i]['link1']) && isset($datos['items'][$i]['link2']))
												echo '<span class="divider"></span>';
											
											if(isset($datos['items'][$i]['link1']) && !empty($datos['items'][$i]['link1']))
												echo '<a href="img/media/'.$datos['items'][$i]['image'].'" class="media-link-1 popup-link" title="some text">'.$datos['items'][$i]['link1'].' </a>';
											
											if(isset($datos['items'][$i]['link2']) && !empty($datos['items'][$i]['link2']))
												echo '<a class="media-link-2" href="'.$datos['items'][$i]['link2']['href'].'">'.$datos['items'][$i]['link2']['text'].'</a>';
										
										echo '</div>';
										
										echo '<div class="project-text">';
											
											if(isset($datos['items'][$i]['title']) && !empty($datos['items'][$i]['title']))
												echo '<h5>'.$datos['items'][$i]['title'].'</h5>';
											
											if(isset($datos['items'][$i]['description']) && !empty($datos['items'][$i]['description']))
												echo $datos['items'][$i]['description'];
											
										echo '</div>';
										
									echo '</div>';

								echo '</article>';
										
							echo '</li>';
							
						}
						
					echo '</ul>';
					
				echo '</section>';
			
			echo '</div>';
			
		echo '<div>';
	}
	
}

?>
