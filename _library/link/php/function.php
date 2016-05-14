<? /* ————————————————————————————————————————————————————————————

[function.php]

global functions to help control output

Ugly Apostraphe = ’; //find all and replace with '

———————————————————————————————————————————————————————————— */

$loremipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

function titlecase($string, $delimiters = array(" ", "-", "O'"), $exceptions = array("to", "a", "the", "of", "by", "for", "and", "with", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X")) { 
	/* 
	Exceptions in lower case are words you don't want converted 
	Exceptions all in upper case are any words you don't want converted to title case 
	but should be converted to upper case, e.g.: 
	king henry viii or king henry Viii should be King Henry VIII 
	*/ 
	foreach ($delimiters as $delimiter){ 
		$words = explode($delimiter, $string); 
		$newwords = array(); 
		foreach ($words as $word){ 
			if (in_array(strtoupper($word), $exceptions)){ 
							// check exceptions list for any words that should be in upper case 
							$word = strtoupper($word); 
				} elseif (!in_array($word, $exceptions)){ 
							// convert to uppercase 
					$word = ucfirst($word); 
					} 
			array_push($newwords, $word); 
			} 
		$string = join($delimiter, $newwords); 
		} 
		return $string; 
	// titlecase(); can be used to intermingle.
	} 

/* ————————————————————————————————————————————————————————— */
////////////// HAND CRAFTED FUNCTIONS FOR REUSE ///////////////
/* ————————————————————————————————————————————————————————— */


function clipboard_title_interior($title, $below){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<div class="title_primary">';
		$output = $output . '<div class="container">';
			$output = $output . '<h1 class="title">'.$title.'</h1>';
			$output = $output . '<div class="style_label_line">';
				$output = $output . '<div class="line"></div>';
				$output = $output . '<p class="below">'.$below.'</p>';
				$output = $output . '<div class="line"></div>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';

	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_clipboard_title_interior = clipboard_title_interior();

/* ————————————————————————————————————————————————————————— */

function clipboard_separator(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	
	$output = $output . '<div class="separator"></div>';
	
	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_clipboard_separator = clipboard_separator();

/* ————————————————————————————————————————————————————————— */

function clipboard_container_grid(){
	global $array_projects;
	global $_clipboard_list_item;
	$match = $_GET['id'];
	$next = $match + 1;
	$previous = $match - 1;
	$total = count($array_projects) -1;
	/* ——————————————————————————————————
	DESCRIPTION: 
	The purpose with this is to switch out the grid class dependant on how many photos are stashed inside of
	the url_after container. if it contains a certain amount, the grid will change to fit the section width without
	leaving a hanging photo on its own, except if there are 5 in the container.
	——————————————————————————————————— */
	// $output = $output . '<ul class="grid_1_1_1"><li></li></ul>';
	foreach($array_projects as $id => $project){
		if($id == $match){
			if($_GET['display'] !== 'before'){
				if(count($project[url_after]) == 1){
					$output = $output . '<ul class="grid_1_1_1">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 2){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 3){
					$output = $output . '<ul class="grid_1_3_3">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 4){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 5){
					$output = $output . '<ul class="grid_1_2_3">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_after]) == 6){
					$output = $output . '<ul class="grid_2_3_3">';
						foreach($project[url_after] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					} // closing if conditional
				}else{
				if(count($project[url_before]) == 1){
					$output = $output . '<ul class="grid_1_1_1">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 2){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 3){
					$output = $output . '<ul class="grid_1_3_3">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 4){
					$output = $output . '<ul class="grid_2_2_2">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 5){
					$output = $output . '<ul class="grid_1_2_3">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					}elseif(count($project[url_before]) == 6){
					$output = $output . '<ul class="grid_2_3_3">';
						foreach($project[url_before] as $url){
							$output = $output . '<li style="background-image:url(_library/img/portfolio/'.$url.');"></li>';
							}
					$output = $output . '</ul>';
					} // closing if conditional
				} // Close checking if display doesn't match with the string 'before'
			$output = $output . '<div>';
			if($match > 0){
				$output = $output . '<a class="style_button between" href="project.php?id='.$previous.'">Previous</a>';
				}
			if($match < $total){
				$output = $output . '<a class="style_button between" href="project.php?id='.$next.'">Next</a>';
				}
			$output = $output . '</div>';
			} // Close conditional matching the current page with id
		} // Close foreach loop
	/* ———————————————————————————————— */
	return $output;}//close function 
	/* ———————————————————————————————— */
	$_clipboard_container_grid = clipboard_container_grid();

/* ————————————————————————————————————————————————————————— */
//////////////////// PASTEBOARD STRUCTURE /////////////////////
/* ————————————————————————————————————————————————————————— */

 
function clipboard_footer(){
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */

	$output = $output . '<div class="section" id="footer">';
		$output = $output . '<div class="inner">';
			$output = $output . '<div class="logo_footer"></div>';
			$output = $output . '<p>Milbro Construction is a licensed owned general construction company owned by Eric Russell from Bremerton, WA.</p>';
			$output = $output . '<p style="margin-top:10px;font-weight:500">Lic# MILBRCL842D1</p>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '<div class="section_copyright">';
		$output = $output . '<p>&copy; Milbro Construction '.date('Y').'. All Rights Reserved. Site design by <a target="none" href="http://nin-yo.com">nin-yo</a> from Kitsap, WA.</p>';
	$output = $output . '</div>';


	/* ———————————————————————————————— */ 	
	return $output;}//close function 
	/* ———————————————————————————————— */ 
	$_clipboard_footer = clipboard_footer();
 

/* ————————————————————————————————————————————————————————— */

function landing_body(){
	global $_clipboard_separator;
	global $_clipboard_container_grid;
	global $array_projects;
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	
	/* ———— ALL PROJECTS ——— */
	if($_GET[display] == 'more'){
		$output = $output . '<div class="section" id="recent_project" style="background:url(_library/img/asset/img_background.png)center no-repeat; background-size:cover;">';
			$output = $output . '<div class="inner">';
				// $output = $output . $_clipboard_separator;
				$output = $output . '<h1>All projects</h1>';
				$output = $output . '<p class="bottom" style="margin-bottom:23px;">Listed below are all completed projects. Click on any to view extra details.</p>';
				$output = $output . '<a class="button_single" href="index.php">back to full page</a>';
				$output = $output . '<ul class="grid_2_2_2">';
					$count = 0;
					foreach($array_projects as $id => $project){
						$output = $output . '<li style="background:url(_library/img/portfolio/'.$project[url_cover_new].')center no-repeat;background-size:cover;">';
							$output = $output . '<a href="project.php?id='.$id.'" style="width:100%;height:100%;display:block;"></a>';
						$output = $output . '</li>';	
						}
				$output = $output . '</ul>';
			$output = $output . '</div>';
		$output = $output . '</div>';
		}else{
	/* ———— 3 RECENT PROJECTS ——— */
	$output = $output . '<div class="header_main" data-parallax="scroll" data-image-src="_library/img/asset/img_header_main.jpg">';
		$output = $output . '<div class="group_center">';
			$output = $output . '<div class="logo_primary"></div>';
			$output = $output . '<p style="color:white;">Your dream home is only a remodel away.</p>';
			$output = $output . '<a class="mobile_only" href="tel:360-277-7585">Call</a>';
			$output = $output . '<a class="nonmobile" href="mailto:russell@milbroconstruction.com">E-mail</a>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '<div class="section" style="background:white;">';
		$output = $output . '<div class="inner">';
			$output = $output . $_clipboard_separator;
			$output = $output . '<h1>High quality remodels<br/>& construction done right</h1>';
			$output = $output . '<p>We conduct practical home remodels, along with entire home remodels, and repairs. We also construct sheds, decks, patios, and garages. Milbro Construction provides the highest quality of work within the timeline of our customers.</p>';
			$output = $output . '<ul class="list_center">';
				// $output = $output . '<div style="background:url(_library/img/asset/gfx_checkmark.png)center no-repeat;"></div>';
				$output = $output . '<li><p style="display:inline-block;">Roofing Repair & Replacement</p></li>';
				$output = $output . '<li><p style="display:inline-block;">Deck & Patio Construction</p></li>';
				$output = $output . '<li><p style="display:inline-block;">Home Remodels & Repairs</p></li>';
			$output = $output . '</ul>';
		$output = $output . '</div>';
	$output = $output . '</div>';
	$output = $output . '<div class="section" id="recent_project" style="background:url(_library/img/asset/img_background.png)center no-repeat; background-size:cover;">';
		$output = $output . '<div class="inner">';
			$output = $output . '<h1>Recent projects</h1>';
			$output = $output . '<p class="bottom">Listed below are projects recently completed. Click on any to view extra details.</p>';
			$output = $output . '<ul class="grid_1_3_3">';
				$count = 0;
				foreach($array_projects as $id => $project){
					$count = $count +1;
					if($count < 4){
						$output = $output . '<li style="background:url(_library/img/portfolio/'.$project[url_cover_new].')center no-repeat;background-size:cover;">';
							$output = $output . '<a href="project.php?id='.$id.'" style="width:100%;height:100%;display:block;"></a>';
						$output = $output . '</li>';	
						}
					}
			$output = $output . '</ul>';
			$output = $output . '<div class="display_projects_text">';
				$output = $output . '<a class="button_wtext" href="index.php?display=more">Display More</a>';
				$output = $output . '<p>Take a look at more work completed by Milbro Construction around the Kitsap Peninsula</p>';
			$output = $output . '</div>';
		$output = $output . '</div>';
	$output = $output . '</div>';	
		}

	/* ———————————————————————————————— */ 
	return $output;}//close function 
	/* ———————————————————————————————— */ 
	$_landing_body = landing_body();

/* ————————————————————————————————————————————————————————— */
	
function interior_body($_clipboard_title_interior, $_clipboard_container_grid){
	global $_clipboard_container_grid;
	global $_clipboard_gridage;
	global $array_projects;
	global $_clipboard_separator;
	$match = $_GET[id];
	/* ——————————————————————————————————
	DESCRIPTION:
	——————————————————————————————————— */
	$output = $output . '<div class="parallax-window header_short" data-parallax="scroll" data-image-src="_library/img/asset/img_header_short.jpg">';
		$output = $output . '<div class="logo_interior"><a href="/" style="display:block;width:100%;height:100%;"></a></div>';
	$output = $output . '</div>';
		if($_GET[display] !== 'before'){
			$output = $output . '<div class="section">';
			$output = $output . '<div class="inner">';	
			$output = $output . $_clipboard_separator;
			/* ———— DISPLAY NEWEST PHOTOS ——— */
			foreach($array_projects as $id => $project){
				if($match == $id){
					$output = $output . clipboard_title_interior($project[type],titlecase($project[location]));
					$output = $output . '<a style="margin-top:8px;margin-bottom:39px;" class="style_button" href="project.php?id='.$id.'&display=before">View Before Photos</a>';
					$output = $output . '<div class="cover" style="background-image:url(_library/img/portfolio/'.$project[url_cover_new].')"></div>';
					$output = $output . '<div id="details">';
						$output = $output . '<h3>'.strtoupper(details).'</h3>';
						$output = $output . '<div class="underline"></div>';
						$output = $output . '<p class="description" style="margin-bottom:15px;">'.$project[description_after].'</p>';
						$output = $output . '<p class="description" style="border-top: 1px solid #F0F0F0;padding-top: 5px;margin-top: 24px;"><a href="project.php?id='.$id.'&display=before"" style="font-weight:400; color:black;">Click here</a> to view how this project started.</p>';
					$output = $output . '</div>';
					$output = $output . $_clipboard_container_grid;
					}
				}
			}else{
			/* ———— DISPLAY OLD PHOTOS ——— */
			$output = $output . '<div class="section old">';
			$output = $output . '<div class="inner">';	
			$output = $output . $_clipboard_separator;
			foreach($array_projects as $id => $project){
				if($match == $id){
					$output = $output . clipboard_title_interior('beginning '.$project[type],titlecase($project[location]));
					$output = $output . '<a style="margin-top:8px;margin-bottom:39px;" class="style_button" href="project.php?id='.$id.'">Back to Completed</a>';
					$output = $output . '<div class="cover" style="background-image:url(_library/img/portfolio/'.$project[url_cover_old].')"></div>';
					$output = $output . '<div id="details">';
						$output = $output . '<h3>'.strtoupper(details).'</h3>';
						$output = $output . '<div class="underline"></div>';
						$output = $output . '<p class="description">'.$project[description_before].'</p>';
					$output = $output . '</div>';
					$output = $output . $_clipboard_container_grid;
					}
				}
			}
		$output = $output . '</div>';				
	$output = $output . '</div>';
	/* ———————————————————————————————— */
	return $output;} //close function 
	/* ———————————————————————————————— */
	$_interior_body = interior_body();

/* ————————————————————————————————————————————————————————— */

?>