<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<title>Mon portfolio</title>
	<link href="page_accueil.css" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- Hamburger -->
  <div class="hamburger">
    <div></div>
    <div></div>
    <div></div>
  </div>

<div class="sidebar">
	<br><br>
	<span class="nom">Laurine Penaud</span>
	
	
	<!--Voir pour le mettre en javascript sur une fenêtre pop up--!>
	<br>
	<button class="CV" onclick="window.open('CV.pdf')">CV</button>
	<br>
	<button class="pix" onclick="window.open('pix.pdf')">Certification PIX</button>
	<br><br>
	<a href="#Parcours" class="titre">Mon parcours</a>
	<a href="#Entreprise" class="titre">Mon entreprise d'accueil</a>
	<a href="#Missions" class="titre">Mes missions</a>
	<a href="#Veille" class="titre">Veille technologique</a>
	<a href="#Conclusion" class="titre">Conclusion</a>
</div>

<!--===============================================================================--!>
<div class="main-content">
	<div class="theme-box">
		<span class="bienvenue typewriter" id="typewriter"></span>
	</div>
	
	<!-- Animation type machine à écrire sur le titre -->
	<script>
	const text = "Bienvenue sur mon portfolio !";
	const speed = 100;
	let index = 0;

	function typeWriter() {
		if (index < text.length) {
			document.getElementById("typewriter").textContent += text.charAt(index);
			index++;
			setTimeout(typeWriter, speed);
		}
	}

	window.onload = typeWriter;
	</script>
	
	<!--===============================================================================--!>
	<div id="Parcours" class="theme-box-1">
		<h1 class="fade-in">Mon parcours</h1>
		<br><br>
			<p class="fade-in">Bonjour, je m'appelle Laurine Penaud et j'ai 30 ans. Au collège, j'ai voulu faire assistante vétérinaire, car j'adore les animaux.
			Cependant, voir des animaux malades est quelque chose de très pénible pour moi, et lors d'un stage, j'ai rencontré un informaticien,
			et son métier m'a tout de suite plu. J'ai donc fini mon baccalauréat en secrétariat, que j'ai eu avec succès en 2013, et je me suis
			tourné vers le CNAM (Conservatoire National des Arts et des Métiers) de Limoges pour passer le diplôme de technicien de maintenance
			en micro-réseau et internet que j'ai décroché en 2016.</p><br>
			<p class="fade-in">J'ai travaillé au Conseil Régional à Limoges, mais la fusion des régions a fait que je n'ai pas pu garder mon poste. Ne trouvant
			pas de travail en informatique parce que j'ai trop peu d'expérience, j'ai dû trouver du travail, et j'ai donc trouvé en usine. Au bout
			de presque 10 ans et ayant enfin un cadre personnel et financier stable, je me suis décidée à reprendre mes études pour être développeuse
			web, c'est pourquoi j'ai intégré le BTS SIO option SLAM.</p>
			<br><br>
			<p class="fade-in">Mais, assez parlé de moi, laissez-moi vous présenter ce qu'est le BTS SIO.</p>
			<p class="fade-in">L'acronyme SIO veut dire "Service Informatique aux Organisations. Le BTS SIO remplace depuis 2011 le BTS IG, qui veut dire "Informatique de Gestion"
			qui a été crée en 1987.</p>
			<p class="fade-in">Il y a 2 options :</p>
			<br>
			
		<div class="container fade-in">
			<details>
				<summary>SISR</summary>
				<div class="encadre fade-in">
					L’option Solutions d’Infrastructure, Systèmes et Réseaux forme des professionnels des réseaux et équipements informatiques (installation, maintenance, sécurité).<br>
					Ces derniers sont en mesure de répondre aux besoins informatiques d’une entreprise, tout en accompagnant la transformation numérique.<br>
					En sortant d’un BTS SIO SISR, les étudiants seront capables de gérer et d’administrer le réseau d’une société et d’assurer sa sécurité et sa maintenance.
				</div>
			</details>
			
			<details>
				<summary>SLAM</summary>
				<div class="encadre fade-in">
					L’option Solutions Logicielles et Applications Métiers du BTS SIO forme des spécialistes des logiciels.<br>
					Les diplômés de cette formation sont capables de rédiger d’un cahier des charges, formuler des besoins et spécifications, développer des applications et les intégrer au sein de la société.<br>
				</div>
			</details>
			
			
			<!-- Script pour l'arrêt de l'animation de flottement quand les "encadrés" sont ouverts -->
			<script>
			document.querySelectorAll('details').forEach(details => {
			const summary = details.querySelector('summary');
				
				// Au changement d'état (open/close) de details
				details.addEventListener('toggle', () => {
					if(details.open) {
					// Si details ouvert, on stoppe le flottement
					summary.classList.add('no-animation');
					} else {
					// Si details fermé, on relance le flottement
					summary.classList.remove('no-animation');
					}
				});
			});
			</script>
			<!-- ================================================================================= -->
			
		</div>
	</div>
	<!--===============================================================================--!>
	<div id="Entreprise" class="theme-box-2 fade-in">
		<h1 class="fade-in">Mon entreprise d'accueil&nbsp; &#128188;</h1>
		<br><br>
		<p class="fade-in">J'ai effectué mon alternance au CICOA (Centre Informatique Centre Ouest Atlantique), sur le site de Limoges, situé 2 rue des Sabines, 87073 Limoges Cedex.
		Il gère les pôles production, supervision opérationnelle, l'administration et les supports. Le siège social est basé sur Tours, situé 1 rue Marcel Tribut, 37042 Tours Cedex.
		Il y a la direction, l'administration des ressources et le développement communication multi-canal. Le CICOA a été créé le 1er janvier 1995 par la fusion des deux ex-Cetelic du Centre et du Centre Ouest.</p>
		
		<br><br>
		<p class="fade-in">Le CICOA exerce, depuis 2013, des missions nationales de fabrication, d’exploitation et de supervision :
		<br>– Une mission fabrication de composants des outils de Gestion de la Relation Client (GRC) et de maintenance des bibliothèques de modèles courrier utilisés par les organismes, et la préparation d’un système d’information mutualisé (Cereus) pour assurer les productions éditiques de la Sécurité Sociale.
		<br>– Une mission d’exploitation des applications GRC et éditique
		<br>– Une mission de supervision du système d’information</p>
		
		<br><br><p class="fade-in">Les clients du CICOA sont :
		
		<br>– L’ensemble des organismes (CPAM, CGSS, DRSM, CSS…) qui délivrent un service au assurés.
		<br>– Les autres centres informatiques qui bénéficient du service de supervision.
		<br>– Progressivement, les autres branches de la Sécurité Sociale dans le cadre du programme Cereus.</p>
		<br><br><p class="fade-in">Je suis sous la responsabilité de Monsieur Mathias Calberac, responsable adjoint du pôle exploitation. Les pôles exploitation, solution HSV et GRC éditique sont gérés par Monsieur Marc Pernot.
		Le fonctionnement du CICOA est placé sous la responsabilité de la Directrice, Madame Sophie Gassimbala et du Directeur Adjoint, Monsieur Yannick Chevalier.</p>
		<br><br>
		
		
		
		<!--Voir pour le mettre en javascript sur une fenêtre pop up--!>
		<a class="organigramme fade-in" href = "Organigramme.png" target="blank"><img src="Organigramme.png" alt = "Organigramme du CICOA"></a>
		<br><br><br><br><br><br><br><br>
		<div class="memo fade-in">
		Mots-clés :<br>
			- CPAM : Caisse Primaire d'Assurance Maladie<br>
			- CGSS : Caisse Générale de Sécurité Sociale<br>
			- DRSM : Direction Régional du Service Médical<br>
			- CSS : Complémentaire Santé et Solidaire<br>
		</div>
	</div>
	<!--===============================================================================--!>
	<div id="Missions" class="theme-box-3 fade-in">
		<h1 class="fade-in">Mes missions&nbsp; &#128295;</h1>
		<br><br>
		<p class="fade-in">Dans le cadre de mon alternance, j'ai eu l'occasion de reprendre un projet de site interne, appelé "Intraincident" qui a pour but de lister la documentation
		permettant de résoudre les problèmes survenant sur les différents serveurs. J'ai dû, entres autres, mettre en place une pagination, faire une barre de recherche par
		mots-clés, revoir toute la mise en forme des pages. Il a été développé en HTML, PHP et avec des feuilles de style CSS.</p>
		<br>
		<p class="fade-in">Dans un deuxième temps, j'ai participé à la mise en place d'un planning de tâches et d'évènements pour les agents du CICOA de mon secteur. Ce planning a pour but de gérer les
		tâches prévues pour les agents du secteur Production, comme les mises en production, ainsi que leur congés ou arrêts maladies.</p>
		<br>
		<p class="fade-in">Dans le cadre de mes cours de BTS, j'ai eu l'occasion de travailler sur un projet qui a fait appel au framework Symfony, ainsi que de travailler avec le langage
		Java. J'ai aussi développé, dans le cadre d'un projet en cours de formation, une application téléphone avec Flutter, en dart.</p>
		<br>
		
		<!-- Rajouter les logos de flutter / java --!>
		
		<div class="logo fade-in">
			<img src="html5_bis.png" alt="Logo HTML 5"><img src="css3_bis.png" alt="Logo CSS 3"><img src="php.png" alt="Logo PHP"><img src="java.png" alt="Logo Java">
		</div>
		
		<br><br>
		<p class="fade-in">Dans le cadre de mes cours de BTS, j'ai eu l'occasion de travailler sur un projet qui a fait appel au framework Symfony, ainsi que de travailler avec le langage
		Java. J'ai aussi développé, dans le cadre d'un projet en cours de formation, une application téléphone avec Flutter, en dart.</p>
		<br>
		<div class="logo fade-in">
			<img src="symfony_framework.png" alt="Logo symfony"><img src="flutter_framework.png" alt="Logo flutter">
		</div>
		
		<br><br>
		
		<br><br><br><br>
		<p class="fade-in">Choisissez le type d'activités que vous voulez consulter :</p>
		
		<select id="choixActivite" class="fade-in">
			<option value="">-- Sélectionner --</option>
			<option value="entreprise">Activités en entreprise</option>
			<option value="formation">Activités en formation</option>
		</select>
		
		<!-- Activités entreprise -->
		<div id="bloc-entreprise" class="fade-in" style="display:none;">
			<br>
			<!--Voir pour le mettre en javascript sur une fenêtre pop up pour les documents pdf--!>
			<div class="cases-container">
				<a class="doc" href="pagination.pdf" target="blank"><div class="case">Système de pagination</div></a>
				<a class="doc" href="insertion_image.pdf" target="blank"><div class="case">Insertion d'image sur les fiches incidents</div></a>
				<a class="doc" href="suppression_image.pdf" target="blank"><div class="case">Suppression d'image sur les fiches incidents et sur le serveur</div></a>
				<a class="doc" href="brouillon.pdf" target="blank"><div class="case">Système de brouillon pour les profils non valideurs</div></a>
				<a class="doc" href="màj_mdp.pdf" target="blank"><div class="case">Système de mise à jour des mots de passe des utilisateurs</div></a>
				<!--<a class="doc" href="Connexion_planning_sso.pdf" target="blank"><div class="case">Connexion au planning via SSO</div></a>-->
				<a class="doc" href="Optimisation_formulaire.pdf" target="blank"><div class="case">Optimisation du formulaire d'ajout d'évènements au planning</div></a>
				<a class="doc" href="interpretation_balises.pdf" target="blank"><div class="case">Interprétation des balises html sans les balises XML</div></a>
				<a class="doc" href="Mise_en_place_de_logs.pdf" target="blank"><div class="case">Mise en place d'un journal de log</div></a>
			</div>
		</div>
		
		<br><br>
		<!-- Activités formation -->
		<div id="bloc-formation" class="fade-in" style="display:none;">
			<br>
			<!--Voir pour le mettre en javascript sur une fenêtre pop up pour les documents pdf--!>
			<div class="cases-container fade-in">
				<!-- PROJET SYMFONY -->
				<div class="case projet" style="background-image: url('symfony.png');">
					<div class="overlay">
						<h3>Projet Symfony : site de e-commerce</h3>
						
						<div class="buttons">
							<a href="documentation/doc_symfony/documentation_utilisateur_projet_symfony.pdf" class="btn" target="blank">Documentation utilisateur</a>
							<a href="documentation/doc_symfony/documentation/index.html" class="btn" target="blank">Documentation technique</a>
						</div>
					</div>
				</div>

				<!-- PROJET FLUTTER -->
				<div class="case projet" style="background-image: url('flutter.jpg');">
					<div class="overlay">
						<h3>Projet Flutter : application mobile de voyage</h3>
						
						<div class="buttons">
							<a href="documentation/doc_flutter/Documentation_utilisateur_projet_flutter.pdf" class="btn" target="blank">Documentation utilisateur</a>
							<a href="documentation/doc_flutter/doc/api/index.html" class="btn" target="blank">Documentation technique</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
	<!--===============================================================================--!>
	<!-- Mettre les dates des articles -->
	<div id="Veille" class="theme-box-4 fade-in">
		<h1 class="fade-in">Veille technologique&nbsp; &#128225;</h1>
		<br><br>
		<h2 class="fade-in">Qu'est ce que la veille technologique ?</h2>
		<p class="fade-in">La veille technologique consiste à surveiller et analyser régulièrement les évolutions des technologies informatiques
		(outils, langages, frameworks, méthodes) afin de rester informé, d’anticiper les changements et d’améliorer ses compétences professionnelles.</p>
		<br><br>
		<h2 class="fade-in">Le principal outil de ma veille technologique</h2>
		<p class="fade-in">Pour effectuer ma veille, j'ai principalement utilisé un agrégateur de flux RSS nommé Feedly.</p>
		<br><br>
		<h2 class="fade-in">Le sujet de ma veille</h2>
		<p class="fade-in">Pour ma veille, j'ai décidé de traiter le sujet de l'IA dans le développement par le biais de cette thématique :
		<b>Comment l'intelligence artificielle transforme-t-elle le métier de développeur ?</b>
		<br>
		Pour répondre à cette thématique, ma veille va reposer sur 3 thèmes différents :</p>
		<br><br><br>
		
		<h3 class="fade-in">Thème 1 : L'IA comme assistant au développement</h3>
		<!--
			Voir pour mettre une màj auto des liens
			
			1) Génération de code (ChatGPT, GitHub Copilot)
			2) Aide au débogage et à la correction d’erreurs
			3) Complétion automatique et gain de productivité
		--!>
		<br>
		<div class="article-container fade-in">
			<div class="article-block fade-in">
				<strong>De l’assistance par IA au pilotage de l’IA</strong>
				<p>Comment les outils IA assistent les développeurs, automatisent le code répétitif et augmentent la productivité.</p>
				<a href="https://blog.ippon.fr/2025/02/28/de-lassistance-par-ia-au-pilotage-de-lia-lemergence-des-coding-agents-2" target="_blank">Lire l'article</a>
			</div>
			<div class="article-block fade-in">
				<strong>Quand l’IA code : adoption et impact</strong>
				<p>Analyse des usages des outils IA et de leur impact sur les workflows des développeurs.</p>
				<a href="https://www.gaudeztechlab.com/ressources/coding-with-ai-in-2025" target="_blank">Lire l'article</a>
			</div>
			<div class="article-block fade-in">
				<strong>Le développeur devient orchestrateur</strong>
				<p>Focus sur la transition du rôle du développeur face aux agents IA autonomes.</p>
				<a href="https://www.ia-info.fr/agents-codeurs-et-intelligence-artificielle-la-revolution-qui-redefini-le-metier-de-developpeur.html" target="_blank">Lire l'article</a>
			</div>
		</div>
		
		<br><br><br>
		<h3 class="fade-in">Thème 2 : L'impact de l'IA sur les compétences du développeur</h3>
		<!--
			1) Nouvelles compétences attendues
			2) Évolution du rôle du développeur (plus d’analyse, moins de code répétitif)
			3) Importance de la compréhension du code généré
		--!>
		<br>
		<div class="article-container fade-in">
			<div class="article-block fade-in">
				<strong>Supervision et rôle humain</strong>
				<p>Réflexion sur la supervision nécessaire, le rôle humain et les erreurs fréquentes de l’IA.</p>
				<a href="https://nicolas-dabene.fr/articles/2025/11/04/ia-supervision-developpement" target="_blank">Lire l'article</a>
			</div>
			<div class="article-block fade-in">
				<strong>Évolution ou perte de compétences ?</strong>
				<p>Étude sur l’impact de l’IA sur les compétences fondamentales des développeurs.</p>
				<a href="https://ijmcr.everant.org/index.php/ijmcr/article/view/1070" target="_blank">Lire l'article</a>
			</div>
			<div class="article-block fade-in">
				<strong>Le rôle du développeur face aux agents IA</strong>
				<p>Comment le développeur devient analyste et superviseur plutôt qu’un simple écrivain de code.</p>
				<a href="https://codeai.fr/agent-ia-autonome-fin-developpeur" target="_blank">Lire l'article</a>
			</div>
		</div>
		
		<br><br><br>
		<h3 class="fade-in">Thème 3 : Limites, risques et enjeux de l'IA pour les développeurs</h3>
		<!--
			Qualité et fiabilité du code généré
			Dépendance aux outils IA
			Sécurité et confidentialité
			Questions éthiques et juridiques
		--!>
		<br>
		<div class="article-container fade-in">
			<div class="article-block fade-in">
				<strong>Développement assisté par IA : méthodes, risques, limites</strong>
				<p>Analyse des principaux risques : dépendance, perte de compétences, dette technique.</p>
				<a href="https://cto-externe.fr/actualites-conseil/developpement-assiste-ia" target="_blank">Lire l'article</a>
			</div>
			<div class="article-block fade-in">
				<strong>IA et sécurité applicative</strong>
				<p>Examen des risques pour la sécurité du code généré par les assistants IA.</p>
				<a href="https://www.journaldunet.com/intelligence-artificielle/1524177-les-assistants-de-code-ia-representent-ils-une-menace-pour-la-securite-applicative" target="_blank">Lire l'article</a>
			</div>
			<div class="article-block fade-in">
				<strong>Limites et risques de l’IA</strong>
				<p>Discussion sur les limites de l’IA à comprendre le contexte métier et réglementaire.</p>
				<a href="https://cto-externe.fr/actualites-developpement/ia-developpement-web" target="_blank">Lire l'article</a>
			</div>
		</div>
		
	</div>
	<!--===============================================================================--!>
	<div id="Conclusion" class="theme-box-5 fade-in">
		<h1 class="fade-in">Conclusion et remerciements</h1>
		<br><br>
			<p class="fade-in">En guise de conclusion, je tiens, tout d'abord, à remercier le CICOA pour son accueil pendant ces deux années de formation.</p><br>
			<p class="fade-in">Je tiens aussi à remercier tout le corps enseignant, qui a eu la patience pour m'accompagner alors que je débutais et qui a cru en moi pendant ces deux années,
			et sans qui, ma reconversion n'aurait pas pu aboutir.</p>
			<p class="fade-in">J'aimerai pouvoir travailler en tant que développeuse full-stack, pouvoir être polyvalente dans les différentes facettes du métier. On verra où l'avenir me
			guidera, on ne sait jamais de quoi demain est fait, mais j'espère sincèrement arriver à mon but.</p>
	</div>
	<!--===============================================================================--!>
<footer class="fade-in">
	Laurine Penaud <br><br>
	2024 - 2026 <br><br>
	Lycée Suzanne Valadon 39 rue François Perrin 87000 Limoges / BTS SIO Option SLAM
</footer>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
	// Tous les éléments à faire apparaître
	const faders = document.querySelectorAll(".fade-in");

	const appearOnScroll = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
		if (entry.isIntersecting) {
			entry.target.classList.add("show");
			observer.unobserve(entry.target); // animation une seule fois
		}
		});
	}, { threshold: 0.2 }); // 20% visible

	faders.forEach(fader => appearOnScroll.observe(fader));
	});
</script>

<script>
const hamburger = document.querySelector('.hamburger');
const sidebar = document.querySelector('.sidebar');

hamburger.addEventListener('click', () => {
  sidebar.classList.toggle('active');
  hamburger.classList.toggle('open'); // optionnel si on veut animer le hamburger
});
</script>


<script>
const select = document.getElementById("choixActivite");
const blocEntreprise = document.getElementById("bloc-entreprise");
const blocFormation = document.getElementById("bloc-formation");

select.addEventListener("change", function() {
  // On cache tout
  blocEntreprise.style.display = "none";
  blocFormation.style.display = "none";

  // On affiche selon le choix
  if (this.value === "entreprise") {
    blocEntreprise.style.display = "block";
  } else if (this.value === "formation") {
    blocFormation.style.display = "block";
  }
});
</script>

<script>
const hamburger = document.querySelector('.hamburger');
const sidebar = document.querySelector('.sidebar');

hamburger.addEventListener('click', () => {
  sidebar.classList.toggle('active'); // ouvre/ferme la sidebar
  hamburger.classList.toggle('open'); // anime le hamburger
});
</script>





</body>
</html>