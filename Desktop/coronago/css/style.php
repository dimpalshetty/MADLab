<style type="text/css">
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Mulish', sans-serif;
	}
	html, body{
		overflow-x: hidden;
		width: 100%;
    margin: 0px;
    padding: 0px;
	}

	.nav_style {
		background-color: #a1cad5 !important;
	}

	.nav_style a {
		color: white;
	}

	.main_header {
		display: flex;
		justify-content: space-evenly;
		align-items: center;
	}

	.mask {
		padding: 2%;
	}

	.title_1 {
		margin: 10%, 2%, 0%, 2%;
		flex-wrap: wrap;

	}

	@media(max-width:720px) {
		.main_header {
			flex-flow: column wrap;
			align-items: center;
			margin: 2%;
		}

		.title_1 {
			text-align: center;
		}
	}

	.about_main {
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		margin: 2%;
		padding-top: 10%;
	}

	.info{
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		margin: 5%;
	}
	/* .about_body{
		display: flex;
		flex-flow: column wrap;
		align-items: center;
		margin: 2%;
	} */
	.image_2{
		margin: 2%;
		padding-bottom: 2%;
	}


	@media(max-width:720px) {
		.about {
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-direction: column;
			margin: 2%;
		}

		.info {
			display: flex;
			flex-direction: row;
			justify-content: flex-start;

		}
		.col-lg-5 {
			margin-left: 0 px;

		}

		.image_2 {
			margin: 2%;
		}

		.about_body {
			display: flex;
			flex-wrap: nowrap;
			flex-direction: column;
			margin: 2%;
		}
		.navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
.img-fluid{
	width: 85%;
	flex-wrap: wrap;
	justify-content: center;
	margin-left: -30px;
	
}
.navbar{
	padding:15px 0 0 25px; 
        margin: 0;
}
		
	}
</style>