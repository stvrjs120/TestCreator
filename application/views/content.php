<?php
	
	$theme = array(
			'small'  => 'Maths',
			'med'    => 'Maths',
			'large'   => 'Maths',
			'xlarge' => 'Maths',
	);
	
	$subtheme = array(
			'small'  => 'Algebra',
			'med'    => 'Algebra',
			'large'   => 'Algebra',
			'xlarge' => 'Algebra',
	);
	
	$file = array(
			'small'  => 'wave.mp3',
			'med'    => 'wave.mp3',
			'large'   => 'wave.mp3',
			'xlarge' => 'wave.mp3',
	);
	
	$text = array(
			'name'  => 'Small Shirt',
			'id'  => 'Small Shirt',
			'rows'  => '5',
			'cols'  => '50',
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
				<div class="test">
					<div class="titleTest">Test: Math/Calculus</div >
						<table class="tbTest">
							<tr>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
							</tr>
							<tr>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
							</tr>
						</table>
						<div class="db-link">
							<ul id="user-links">
								<li>
									<a title="Settings" id="consTest" href="#">
										<img alt="Settings" src="'.$base.'assets/img/consTest.png" height="20">
									</a>
								</li>
								<li>
									<a title="Edit Test" id="editTest" href="#">
										<img alt="Edit" src="'.$base.'assets/img/editTest.png" height="20">
									</a>
								</li>
								<li>
									<a title="Delete Test" id="editTest" href="#">
										<img alt="Delete" src="'.$base.'assets/img/delTest.png" height="20">
									</a>
								</li>
							</ul>
						</div>
					<div class="clear"></div>
				</div>
				<div class="test">
					<div class="titleTest">Test: Science/Physics</div>
						<table class="tbTest">
							<tr>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
							</tr>
							<tr>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
							</tr>
						</table>
						<div class="db-link">
							<ul id="user-links">
								<li>
									<a title="Settings" id="consTest" href="#">
										<img alt="Settings" src="'.$base.'assets/img/consTest.png" height="20">
									</a>
								</li>
								<li>
									<a title="Edit Test" id="editTest" href="#">
										<img alt="Edit" src="'.$base.'assets/img/editTest.png" height="20">
									</a>
								</li>
								<li>
									<a title="Delete Test" id="editTest" href="#">
										<img alt="Delete" src="'.$base.'assets/img/delTest.png" height="20">
									</a>
								</li>
							</ul>
						</div>
					<div class="clear"></div>
				</div>
				<div class="test">
					<div class="titleTest">Test: Science/Biology</div >
						<table class="tbTest">
							<tr>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
								<th>Title</th>
							</tr>
							<tr>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
								<td>something</td>
							</tr>
						</table>
						<div class="db-link">
							<ul id="user-links">
								<li>
									<a title="Settings" id="consTest" href="#">
										<img alt="Settings" src="'.$base.'assets/img/consTest.png" height="20">
									</a>
								</li>
								<li>
									<a title="Edit Test" id="editTest" href="#">
										<img alt="Edit" src="'.$base.'assets/img/editTest.png" height="20">
									</a>
								</li>
								<li>
									<a title="Delete Test" id="editTest" href="#">
										<img alt="Delete" src="'.$base.'assets/img/delTest.png" height="20">
									</a>
								</li>
							</ul>
						</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="quest-Form">';
	echo		form_open('site/index');
	echo		'<table class="tbTest">
					<tr>
						<td>Select Theme</td>
						<td>'.form_dropdown('themes', $theme, 'large').'</td>
						<td>'.anchor('#', 'Create Theme').'</td>
					</tr>
					<tr>
						<td>Select SubTheme</td>
						<td>'.form_dropdown('subthemes', $subtheme, 'large').'</td>
						<td>'.anchor('#', 'Create Subtheme').'</td>
					</tr>
					<tr>
						<td>Question</td>
						<td>'.form_input('question', '').'</td>
					</tr>
					<tr>
						<td>Multimedia File</td>
						<td>'.form_dropdown('subthemes', $file, 'large').'</td>
						<td>'.anchor('#', 'Upload').'</td>
					</tr>
					<tr>
						<td>Aditional Text</td>
						<td>'.form_textarea($text).'</td>
					</tr>
					<tr>
						<td>'.form_checkbox('option1', '', FALSE).'</td>
						<td>'.form_input('question', '').'</td>
					</tr>
					<tr>
						<td>'.form_checkbox('option1', '', FALSE).'</td>
						<td>'.form_input('question', '').'</td>
					</tr>
					<tr>
						<td>'.form_checkbox('option1', '', FALSE).'</td>
						<td>'.form_input('question', '').'</td>
					</tr>
					<tr>
						<td>'.form_checkbox('option1', '', FALSE).'</td>
						<td>'.form_input('question', '').'</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>'.form_submit('submit', 'Create Question').'</td>
					</tr>
				</table>';
	echo		form_close();
	echo		validation_errors('<p class ="error">');
	echo	'</div>
			<div id="creat-Test">';
	echo		form_open('site/index');
	echo		'<table class="tbTest">
					<tr>
						<td>Select Theme</td>
						<td>'.form_dropdown('themes', $theme, 'large').'</td>
					</tr>
					<tr>
						<td>Select SubTheme</td>
						<td>'.form_dropdown('subthemes', $subtheme, 'large').'</td>
					</tr>
					<tr>
						<td>'.form_submit('submit', 'Go!').'</td>
					</tr>
				</table>';
	echo		form_close();
	echo		validation_errors('<p class ="error">');
	echo	'</div>';
?>