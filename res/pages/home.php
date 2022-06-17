<?php session_start(); ?>
<?php include "../components/header.php"; ?>
</head>
<body>
	
	<div id="container">

		<!-- ====== FORMULAIRE ===  ===== --> 

		<div class='formulaire'>
			<h1 class="title">Demande de salle</h1>
			<form action="./send.php" method="post" name="form" onsubmit="return hour()">
				<div class="c">
					<div class='content'>
						<div class="input-field col s12 reveal-interval">
							<select id="select" name="salle">
								<optgroup label="3ème Etage">      
									<option value="Salle du Coneil">Salle du Conseil</option>
								</optgroup>
								<optgroup label="2ème Etage">
									<option value="Salle Abricot">Salle Abricot</option>
								</optgroup>
								<optgroup label="1er Etage">
									<option value="Salle Granny">Salle Granny</option>
									<option value="Réfectoire">Réfectoire</option>
								</optgroup>
								<option value="6ème Etage">6ème Etage</option>
							</select>
							<label>Nom de la Salle</label>
						</div>
						<div class="input-data reveal-interval">
							<input type="text" id="object" name="objet" autocomplete="off" required>
							<label for="">OBJET</label>
						</div>
						<div class="input-data reveal-interval">
							<input type="text" id="name" name="lastname" autocomplete="off" value="<?php echo $_SESSION['nom']; ?>" required>
							<label for="">NOM</label>
						</div>
						<div class="input-data reveal-interval">
							<input type="text" id="last_name" name="name" autocomplete="off" value="<?php echo $_SESSION['prenom']; ?>" required>
							<label for="">PRENOM</label>
						</div>
						<div class="input-data reveal-interval">
							<input type="text" id="mail" name="email" autocomplete="off" value="<?php echo $_SESSION['email']; ?>" required>
							<label for="">EMAIL</label>
						</div>
						
						<div class="input-data reveal-interval">
							<input type="text" id="date" name="date" autocomplete="off" class="datepicker" required>
							<label for="">DATE</label>
						</div>
						<div class="time-row">
							<div class="col s1 reveal-interval">
								<input id="time1" type="time" class="validate" name='time1' required>
								<label for="last_name">HEURE DE DEPART</label>
							</div>
							<p class="reveal-interval"> À </p>
							<div class="col s1 reveal-interval">
         						<input id="time2" type="time" class="validate" name='time2' required>
          						<label for="last_name">HEURE DE FIN</label>
        					</div>
						</div>
						<div class="input-data input-hardware input-field material col s12 reveal-interval">
    						<select id="hardware_material" name="pc">
      							<option value="" disabled>Combient de PC avez-vous besoin ?</option>
								<option value="0" selected>0</option>
      							<option value="1">1</option>
      							<option value="2">2</option>
      							<option value="3">3</option>
    						</select>
    						<label>Matériel Informatique</label>
  						</div>
					</div>
					<button type="submit" class="btn btn-primary reveal-interval" id="btn_send" name="send">ENVOYER   <i class="fa-solid fa-paper-plane"></i></button>
				</div>
			</form>
		</div>

		<!-- ====== /FORMULAIRE ======= -->

		<!-- ====== CALENDRIER ====== -->

		<div class='calendrier'>
			<h1 class='title'>Agenda</h1>
			<div class='calendrier-container'>
				<div class='anim-border'>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FParis&amp;src=Z2wwb2lyZTlmdjNkbGdhMGtiYTB1ZWxpZGNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=c3ZuOWczYWpicDJoMjU2MjRvdnRvaWN0b2tAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=a2s1MDBzYmdwc205Yjdmc3IyczA0c3JuYWNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=YzZuc2gyZm0yZTdhZmQ1MjNmYzNlNmx1NTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23F6BF26&amp;color=%237CB342&amp;color=%23D81B60&amp;color=%23039BE5&amp;title=R%C3%A9servation%20Salles%20par%20Semaine&amp;mode=WEEK" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="legend">
					<div class="float room-interval">
						<div class="carre" style="background-color: #E67399; width: 20px; height: 20px;"></div>
						<p>Salle du Conseil</p>
					</div>
					<div class="float room-interval">
						<div class="carre" style="background-color: #CF9911; width: 20px; height: 20px;"></div>
						<p>Salle Abricot</p>
					</div>
					<div class="float room-interval">
						<div class="carre" style="background-color: #7EC225; width: 20px; height: 20px;"></div>
						<p>Salle Granny</p>
					</div>
					<div class="float room-interval">
						<div class="carre" style="background-color: #59BFB3; width: 20px; height: 20px;"></div>
						<p>Réfectoire</p>
					</div>
				</div>
			</div>
		</div>

		<!-- ====== /CALENDRIER ====== -->

	</div>

	<!-- ====== FOOTER ====== -->

	<!-- <footer>
		<p>Copyright &copy;2022 Cottage</p>
	</footer> -->

	<!-- ====== /FOOTER ====== -->

	<!-- JAVASCRIPT -->

	<?php include "../components/javascript.php"; ?>

	<!-- /JAVASCRIPT -->
</body>
</html>