<style>
	.menu-container{
		display:flex;
		justify-content: center;
	}
    .menu{
        display:flex;
		background-color: white;
		border-radius: 10px;
    }
	.menu-item{
		text-align: center;
		width: 100px;
		border: 1px solid #f3efef;
		padding: 10px;
        color: darkred;
        display: flex;
        gap: 5px;
        align-items: center;
        justify-content: center;
	}
	.menu-item:hover{
		background-color:#ffdada;
		cursor: pointer;
	}
	a{
		text-decoration: none;
	}
</style>

<div class="menu-container">
	<div class="menu">
		<div class="menu-item" onclick="openFotos()">
			Fotos
		</div>
		<div class="menu-item" onclick="openVideos()">
			Videos
		</div>
	</div>
</div>

<script>
    function openFotos(){
        window.location.href = "/samira/galeria_fotos.php";
    }
	function openVideos(){
        window.location.href = "/samira/galeria_videos.php";
    }
</script>