<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css"/>

	<div class="front">
	<div class="header">
  		<img src="images/background_pic.jpg" alt="Processor image">
  		<div class="nav">
    		<ul>
      			<li><a href="home.html">Home</a></li>
      			<li><a href="#">About</a></li>
      			<li><a href="#">Lessons</a></li>
      			<li><a href="#">Contact</a></li>
    		</ul>
  		</div>
    </div>
	</div>
</head>

<body>
	<div class="general_text" style="padding-bottom: 61px;">
		<p style="float: left">FORUM</p>
		<p style="float: right">You have been logged out. <a href="login.php">LOGIN </a>to post</p>
	</div>

	<div class="post">
		<div class="pull_left">
			<h1><a href="#" onclick="showDiscussion(1)">Category Name</a></h1> 
		</div>
		<div class="pull_right">
			<a class="theme_button" id="post_button_1" href="#" onclick="popup(1)" style="display:none;">Post</a> 
			<a class="theme_button" id ="cancel_button_1" href="#" onclick="startDiscussion(1)">Start Discussion</a>
		</div>
	</div>

	

	<div id="cat_discussions_1" class="forum_part" style="display:none;">
		<table class="forum_table">
			<thead>
				<th>Discussion</th>
				<th>Author</th>
				<th>Replies</th>
			</thead>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
		</table>

		<div class="forum_table">
			<a href="#" style="padding-left: 3px;"><b>View More...</b></a>
		</div>
	</div>

	<div id = "new_discussion_1" class="forum_part" style="display: none;" >
		<form>
			<label for="newDiscussionTitle">Title</label>
			<input type="text" class="form-control" name="newDiscussionTitle">
			<label for="discussionBox">Content</label>
			<textarea class="discussionArea" name="discussionBox" rows="6" cols="50"></textarea>
		</form>
	</div>

		<div class="post">
		<div class="pull_left">
			<h1><a href="#" onclick="showDiscussion(2)">Category Name</a></h1> 
		</div>
		<div class="pull_right"> 
			<a class="theme_button" id="post_button_2" href="#" onclick="popup(2)" style="display:none;">Post</a> 
			<a class="theme_button" id ="cancel_button_2" href="#" onclick="startDiscussion(2)">Start Discussion</a>
		</div>
	</div>

	


	<div id="cat_discussions_2" class="forum_part" style="display:none;">
		<table class="forum_table">
			<thead>
				<th>Discussion</th>
				<th>Author</th>
				<th>Replies</th>
			</thead>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
		</table>

		<div class="forum_table">
			<a href="#" style="padding-left: 3px;"><b>View More...</b></a>
		</div>

		</div>

		<div id = "new_discussion_2" class="forum_part" style="display: none;" >
		<form>
			<label for="newDiscussionTitle">Title</label>
			<input type="text" class="form-control" name="newDiscussionTitle">
			<label for="discussionBox">Content</label>
			<textarea class="discussionArea" name="discussionBox" rows="6" cols="50"></textarea>
		</form>
	</div>

	<div class="post">
		<div class="pull_left">
			<h1><a href="#" onclick="showDiscussion(3)">Category Name</a></h1> 
		</div>
		<div class="pull_right">
			<a class="theme_button" id="post_button_3" href="#" onclick="popup(3)" style="display:none;">Post</a> 
			<a class="theme_button" id ="cancel_button_3" href="#" onclick="startDiscussion(3)">Start Discussion</a>
		</div>
	</div>

	

	<div id="cat_discussions_3" class="forum_part" style="display:none;">
		<table class="forum_table">
			<thead>
				<th>Discussion</th>
				<th>Author</th>
				<th>Replies</th>
			</thead>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
		</table>

		<div class="forum_table">
			<a href="#" style="padding-left: 3px;"><b>View More...</b></a>
		</div>
	</div>

	<div id = "new_discussion_3" class="forum_part" style="display: none;" >
		<form>
			<label for="newDiscussionTitle">Title</label>
			<input type="text" class="form-control" name="newDiscussionTitle">
			<label for="discussionBox">Content</label>
			<textarea class="discussionArea" name="discussionBox" rows="6" cols="50"></textarea>
		</form>
	</div>
	
	<script src = "js\home.js" type="text/javascript"></script>

</body>
</html>
