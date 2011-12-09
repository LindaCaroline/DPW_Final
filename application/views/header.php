
<html>
<head>
	<title><?php echo $title; ?></title>
	<style>
		body {
				margin:0px; padding:0px;
				background-color#996;
				font-family:Arial, Helvetica, sans-serif;
				color:#000;
				font-size:13px;
				line-height:19px;
			}
		#main {
				background:#F39;
			}
		#main .container {
				background:#FFF;
				min-height:400px;
			}
		#header {
				background:#FFF;
				padding-top:10px;
			}
		ul#menu {
	margin:0px;
	padding:0px;
	position:absolute;
	right:809px;
	top: 88px;
			}
		ul#menu li {
				display:inline;
				margin-left:20px;
			}
		ul#menu li a {
				text-decoration:none;
				color:#000;
				font-family:"Arial Black", Gadget, sans-serif;
				font-size:13px;
				font-weight:bold;
				text-transform:uppercase;
			}
		ul#menu li a.active, ul#menu li a:hover {
				color:#F39;
				background-color:#FFF
			}
		#logo h1, #logo small {
				margin:10px;
				display:block;
				text-indent:0px;
			}
		h2 {
				margin:0px 0px 10px 0px;
				font-size:36px;
				font-family:Arial, Helvetica, sans-serif;
				color:#000000;
			}
		small {
				color:#595586;
				font-weight:bold;
				font-size:11px;
				display:block;
				margin-bottom:15px;
			}

		.container {
				width:950px;
				margin:0 auto;
				position:inherit;
			}
	</style>
</head>

<body>

        	<div id ="header">
				
                 <div id="logo">
                	<h1 align="right">Asian Drama</h1>
                    <div align="right"><small>Dorama - Kadorama</small></div>
                 </div>
                 <div>
					<ul id="menu">
                      <li><?php echo anchor('welcome_2','Beranda')?></li>
                      <li><?php echo anchor('welcome_2/kadorama','Kadorama')?></li>
                      <li><?php echo anchor('welcome_2/dorama','Dorama')?></li>
                    </ul>
			  	</div>
</div>
</body>

</html>
