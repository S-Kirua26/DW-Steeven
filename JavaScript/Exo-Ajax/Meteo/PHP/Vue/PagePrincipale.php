<!-- Cette page est le contenu de la page principale du site; Elle présente la liste des parkings. -->

<div id="divSousTitre">
	<h3>Veuillez choisir un lieu</h3>
</div>
<div id="divContenu">
	<div class="padding"> Veuilez renseigner une ville: <input id="bouton" type="text"/></div>
	<div class="padding"><input id="valide" type="submit" value="Rechercher"/></div>
	<div class="ligne titreLigne">
		<div id="lieu">Lieu
			<div class="bleu" id="contenuLieu"></div>
		</div>
		<div id="temp">Temps
			<div class="bleu" id="contenuTemps"></div>
		</div>
		<div id="vent">Température
			<div class="bleu" id="contenuVent"></div>
		</div>
	</div>
	<div class="paddingHard"></div>
	<div class="paddingHard"></div>
	<div class="ligne titreLigne">
		<div id="sunRise">Lever du soleil
			<div class="bleu" id="contenuSunRise"></div>
		</div>
		<div id="sunSet">Coucher du soleil
			<div class="bleu" id="contenuSunSet"></div>
		</div>
	</div>
	<div class="photographie ligne">
		<div class="espace"></div>
		<div class="image"><img id ="imgMeteo" src="" alt="Image de la météo"></div>
		<div class="espace"></div>
	</div>
	<div class="espaceHorizon"></div>
</div>