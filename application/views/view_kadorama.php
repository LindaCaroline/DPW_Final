<!DOCTYPE html>
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
	<link type="text/css" href="/TugasDPW/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet"/>	
	<script type="text/javascript" src="/TugasDPW/js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="/TugasDPW/js/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript">
			$(function()
			{
				$('#tabs').tabs();
				$("#accordion").accordion({ header: "h3", event: "mouseover"});
			});
		</script>
</head>

<body>
	<div id ="main">
    	<div class="container">
			<?php include ('header.php'); ?> 
			
			
            <div id ="block_featured" class="block">            	
            	<span class="block_inside">
    				<div class="image_block"></div>
                 </span>
                <div id="accordion">
					<div>
						<h3><a href=""><?php echo anchor('welcome_2/babyandme','Baby & Me');?></a></h3>
						<div><img src="/TugasDPW/images/Baby&Me.JPG"/>
						<p>Pulang sekolah joon soo nemuin amplop dan kaset rekaman yg ditinggalin orang tuanya. karena ga tahan dengan kelakuan joon soo, dan pengin ngasih pelajaran buat joon soo, orang tuanya kabur dari rumah.dan hanya  ninggalin uang saku 100 dollar, untuk bertahan hidup.</p>
						
						<p>Namun bukannya sedih, dia malah senang dan ngundang teman2nya ngadain pesta di rumahnya. Tapi Han Joo Soo ga lama menikmati kesenangannya, karena ketika dia belanja di supermarket, waktu dia lagi milih milih minuman,di troli belanja miliknya tiba-tiba udah ada bayi laki laki yg lucu dan imut. </p>
						
						<p>Jelas aja dia kaget n bingung banget yg akhirnya bayi itu diserahkan kepada petugas supermarket,tetapi setelah diperiksa oleh petugas supermarket ditemukan  surat yang ditinggalkan di dalam box baby nya,yang isinya kalo han joon soo adalah ayah dr c baby.tentu aja joon soo kaget banget sambil mikir tu anak dr mantannya yg mana?? .</p></div>
					</div>
			
					<div>
						<h3><a href=""><?php echo anchor ('welcome_2/endlessLove','Endless Love'); ?></a></h3>
						<div><img src="/TugasDPW/images/EndlessLove.JPG"/>
						<p>Dikisahkan tentang Yun Joon Suh (Song Seung Hun) dan Eun Suh (Song Hye Kyo) dibesarkan sebagai kakak beradik selama 14 tahun sampai munculnya sebuah fakta yang mengejutkan keluarga mereka. Ternyata Eun Suh bukan adik perempuan kandung Joon Suh melainkan anak orang lain yang tertukar ketika masih bayi.</p>
						
						<p>Peristiwa tersebut terjadi gara-gara bocah lelaki cilik Joon Suh secara tidak sengaja memainkan label nama dalam ruang bayi di rumah sakit tempat adik perempuan Joon Suh dilahirkan.</p>
						
						<p>Akibatnya Eun Suh yang seharusnya berada di keluarga Choi, jadi dipelihara oleh keluarga Yun yang merupakan keluarga berada. Sedangkan adik perempuan asli Joon Suh, Shin Ae (Han Chae Young) dipelihara keluarga Choi yang miskin. Kekeliruan tersebut tanpa sengaja terungkap ketika Eun Suh mengalami kecelakaan pada usia 14 tahun.</p></div>
					</div>			
				</div>
    		</div>
    	</div>                		               
	</div>    
		
	<?php include ('footer.php'); ?> 
</body>

</html>
