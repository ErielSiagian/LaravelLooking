<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Learning CSS</title>
		<link rel="stylesheet" href="/udemyhtmlassets/css/screen.css">
	</head>
	
	<body>
		
		<div class="container">
			<header>
				<h1>Website Title</h1>
				<p>Website slogan included here.</p>
				
				<nav class="site-nav">
					<ul class="group">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</header>
			
			<div class="content-area group">
				
				<div class="main-area">
					<h2>Main Column Heading</h2>
					
					<p>This is the main area (or column). Lorem ipsum <a href="#">this is a sample link</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
					<div class="image-banner">
						<img src="/udemyhtmlassets/img/dummy.png">
						
						<div class="banner-description">
							<p>This is a brief description of the image. This is a photograph of a preacher who talks too much and never consider to take a brief moment regarding of her constant alcohol abuse</p>
						</div>
					</div>

					<br>

					<div>
					<table class="grocery-list">
						<thead>
							<tr>
								<th class="col-item-name">Item Name</th>
								<th class="col-item-quantity">Quantity</th>
								<th class="col-item-price">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Oranges</td>
								<td>Five</td>
								<td>$1.50</td>
							</tr>
							<tr>
								<td>Garlics</td>
								<td>Ten</td>
								<td>$0.90</td>
							</tr>
							<tr>
								<td>Peaches</td>
								<td>Seven</td>
								<td>$1.70</td>
							</tr>
						</tbody>
					</table>
					</div>

					<br>

					<div>
						<form>
							<label for="email" class="hidden-label">Email</label><input type="email" name="email">

							<label for="password" class="hidden-label">Password</label><input type="password" name="password">

							<select>
								<option>JaidenAnimations</option>
								<option>Lori Loud</option>
								<option>Anne Boonchuy</option>
								<option>Luz Noceda</option>
							</select>

							<input type="submit" value="Sign In">
							<label>
								<input type="checkbox" name="remember" checked="checked" value="yes">
								<span class="checkbox-text">Stay signed in</span>
							</label>
						</form>
					</div>

					<ul>
						<li>Example list item</li>
						<li>Example list item</li>
						<li>Example list item</li>
						<li>Example list item</li>
						<li>Example list item</li>
						<li>Example list item</li>
					</ul>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. In reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>


				<aside class="sidebar">
					<p>This is the sidebar. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
				</aside>
				
			</div>

			<footer>
				<p>&copy; 2014 - This is the footer.</p>
			</footer>
		</div>
		
	</body>
	
</html>