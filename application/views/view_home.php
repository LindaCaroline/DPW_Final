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
						<h3><a href=""><a href=""><?php echo anchor ('welcome_2/Litter','1 Litter Of Tears'); ?></a></h3>
						<div><img src="/TugasDPW/images/1LitersOfTears.JPG"/>
						<p>Tak terasa waktu berlalu begitu cepat, Aya akhirnya lulus dari sekolah khusus untuk orang cacat. Meninggalkan sekolah, gadis itu disambut gembira oleh keluarga Ikeuchi. Di saat yang sama, Asou juga sibuk mempersiapkan diri untuk tes masuk universitas.</p>
						<p>Untuk merayakan, keluarga Ikeuchi mengundang beberapa teman Aya untuk makan bersama (termasuk Asou). Mendengarkan rencana masa depan mereka, Aya hanya bisa memandang dengan penuh arti. Malamnya, gadis itu kembali mengisi buku harian untuk mencurahkan semua perasaan dan kesulitan yang dialami.</p>
						
						<p>Diam-diam ia merasa minder terutama saat diajak Asou berkeliling kampus, karena sadar tidak bisa bersama pemuda itu seperti pasangan lainnya dalam kondisi normal. Namun dengan setia, Asou terus berada disamping Aya saat gadis itu melakukan rehabilitasi. </p>
						
						<p>Bahkan, pemuda itu memberi kejutan dengan seikat bunga yang indah yang langsung membaut Aya berseri-seri. Diam-diam kondisi ini diperhatikan oleh sang ayah, yang saat bertemu Shioka menyampaikan kekuatirannya akan hubungan Asou dan Aya. Rupanya, pria itu tidak ingin keduanya terluka di masa depan.</p></div>
					</div>			
				</div>
    		</div>
    	</div>                		               
	</div>    
		
	<?php include ('footer.php'); ?> 
</body>

</html>
