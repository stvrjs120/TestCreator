<?php
	
	$form = array(
			'class'	=>	'form',
			'id'	=>	'add-quest',
			'name'	=>	'add-quest',
			);
	
	$options = array(
			'small'	=>	'Small Shirt',
			'med'	=>	'Medium Shirt',
			'large'	=>	'Large Shirt',
			'xlarge' =>	'Extra Large Shirt',
			);
	
	$base = base_url();	
	
	echo 	'<div id="side">
				<h4>TestCreator Options</h4>
				<div id="menu">
					<div title="Add Content" id="writeTest">
						<div id="menu-make" class="btn-menu">
								<img alt="Create Test" src="'.$base.'assets/img/test.png" height="100" width="100">
						</div>
						<div class="info">
							<h2 class="menu_info">Create Test</h2>
							<p class="menu_info">Create a test using the questions you add in</p>
						</div>
					</div>
					<div title="Add Content" id="writeQuest">
						<div id="menu-write" class="btn-menu">
							<img alt="Add Content" src="'.$base.'assets/img/Writing.png" height="100" width="100">
						</div>
						<div class="info">
							<h2 class="menu_info">Write Questions</h2>
							<p class="menu_info">Add questions using text, video, audio, images and more...</p>
						</div>
					</div>
				</div>
			</div>
			<div id="content">
				<div id="title-test">
					<h3>
						Test list
					</h3>
				</div>
				<div class="test">';
	echo			validation_errors();
	echo 			form_open('#', $form);
	echo				'<table class="tbTest">
							<tr>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
							</tr>
						</table>
					</div>
				</div>
			</div>';
?>