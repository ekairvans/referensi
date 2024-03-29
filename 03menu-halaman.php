<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			list-style: none;
			text-decoration: none;
		}
		.middle{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.menu{
			width: 300px;
			border-radius: 8px;
			overflow: hidden;
		}
		.item{
			border-top: 1px solid #2980b9;
			overflow: hidden;
		}
		.btn{
			display: block;
			padding: 16px 20px;
			background: #3498db;
			color: #fff;
			position: relative;
		}
		.btn:before{
			content: "";
			position: absolute;
			width: 14px;
			height: 14px;
			background: #3498db;
			left: 20px;
			bottom: -7px;
			transform: rotate(45deg);
		}
		.smenu{
			background: #333;
			overflow: hidden;
			transition: max-height 0.3s;
			max-height: 0;
		}
		.smenu a{
			display: block;
			padding: 16px 26px;
			color: #fff;
			font-size: 14px;
			margin: 4px 0;
			position: relative;
		}
		.smenu a:before{
			content: "";
			position: absolute;
			width: 6px;
			height: 100%;
			background: #3498db;
			left: 0;
			top: 0;
			transition: 0.03s;
			opacity: 0;
		}
		.smenu a:hover:before{
			opacity: 1;

		}
		.item:target .smenu{
			max-height:10em;
			
		}
	</style>
</head>
<body>
	<div class="middle">
		<div class="menu">
			<li class="item" id="profil">
				<a href="#profil" class="btn">Profil</a>
				<div class="smenu">
					<a href="#">Post</a>
					<a href="#">Picture</a>
				</div>
			</li>

			<li class="item" id="massages">
				<a href="#massages" class="btn">Massages</a>
				<div class="smenu">
					<a href="#">New</a>
					<a href="#">Sent</a>
					<a href="#">Spam</a>
				</div>
			</li>

			<li class="item" id="setting">
				<a href="#setting" class="btn">Setting</a>
				<div class="smenu">
					<a href="#">Password</a>
					<a href="#">Language</a>
				</div>
			</li>

			<li class="item">
				<a href="#" class="btn">Logout</a>
			</li>

		</div>
	</div>
</body>
</html>