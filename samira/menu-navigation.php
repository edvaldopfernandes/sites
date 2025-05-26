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
		<div class="menu-item" onclick="openHome()">
			Home
		</div>
		<div class="menu-item" onclick="openSobre()">
			Sobre
		</div>
		<div class="menu-item" onclick="openGalery()">
			Galeria
		</div>
		<div class="menu-item" onclick="openWhats()">
			<img src="/samira/img/WhatsApp_Logo_Sem_Fundo.png" width="25" height="auto">
			Contato
		</div>
	</div>
</div>

<script>
    function openHome(){
        window.location.href = "/samira/index.php";
    }
	function openSobre(){
        window.location.href = "/samira/sobre.php";
    }
	function openGalery(){
        window.location.href = "/samira/galeria.php";
    }
	function openWhats(){
        window.location.href = "https://api.whatsapp.com/send?phone=555517996040305&text=Oi%2C+tudo+bem%3F"
    }
</script>