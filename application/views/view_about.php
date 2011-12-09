<html>
<head>
	<style>
		body {
				margin:0px; padding:0px;
				background-color:#C60;
				font-family:Arial, Helvetica, sans-serif;
				color:#000;
				font-size:13px;
				line-height:19px;
			}
		#main {
				background:#C60;
			}
		#main .container {
				background:#C60;
				min-height:400px;
			}
		div.block_inside a {
				background:#32312f;
				padding:5px 10px 5px 10px;
				color:#ffffff;
				text-decoration:none;
				border:1px solid #32312f;
				text-transform:uppercase;
				font-size:9px;
				line-height:25px;
			}
		div a:hover {
				background:#007de2;
				border-color:#007de2;
			}
		.block {
				border:1px solid #a3a09e;
				background-color:#ffffff;	
				margin-bottom:20px;
				position:relative;
			}
		.block_inside {
				display:block;
				border:1px solid #ffffff;
				background:#ffffff;
				padding:30px;
				overflow:auto;
			}
		.image_block {
				border:1px solid #b5b5b5;
				background-color:#d2d2d2;
				padding:5px;
				width:400px;
				height:150px;
				float:left;
			}
		.text_block {
				float:left;
				width:430px;
				margin-left:30px;
			}
		#block_portfolio {  
				overflow:auto;  
				margin-bottom:20px;  
			}  
		#portfolio_items {  
				width:615px;  
				margin-right:25px;  
				float:left;    
			}  
		#text_column {  
				float:rightright;  
				width:310px;  
			}  
		#text_column h2#text_title {  
				text-indent:-9999px;  								
				width:310px;  
				height:129px;  
			}    
		.mini_portfolio_item {  
				border:1px solid #a3a09e;  
				margin-bottom:10px; 
				margin-left:30px;
				position:relative;  
			}  
		.mini_portfolio_item .block_inside {  
				background:none; background-color:#e2dddc; 
				padding:10px 10px 10px 10px;  
			} 
		.container {
				width:950px;
				margin:0 auto;
				position:inherit;
			}
	</style>
</head>

<body>
	<div id ="main">
    	<div class="container">
			<?php include ('header.php'); ?> 
			
            <div id ="block_featured" class="block">            	
            	<span class="block_inside">
    				<div class="image_block"></div>
                    <div class="text_block">
                        <h2><?php echo $heading; ?></h2>
                    </div>
                 </span>
                 
                 <div id="block_portfolio">
            		<div id="portfolio_items">
                		<div class="mini_portfolio_item">                        	
                    		<div class="block_inside">                            	
                            	<h3>Penulis</h3>
                            	<p>Howard G. Hendricks adalah seorang pengajar terkenal dan ketua Center for Christian Leadership di Dallas Theological Seminary. Ia menulis beberapa buku, di antaranya <em> Heaven Help the Home </em> dan <em> Say It with Love.</em> Ia dan Istrinya, Jeanne, dikaruniai empat orang anak, yang juga sudah memberi mereka cucu-cucu.
                                </p>								
                        	</div>
                    	</div>
         			</div>
					
       			</div>
    		</div>
    	</div>                		               
	</div>    
	
	<?php include ('footer.php'); ?> 
</body>

</html>
