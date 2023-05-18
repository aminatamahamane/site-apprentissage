<link rel="stylesheet" href="styleCours.css">
 <nav>
			<ul>
				
				
				<li><a href="index.php" class="button"> Acceuil</a></li>
				
				
			</ul>
			
		</nav>
<!-- Code PHP pour afficher les onglets -->
<div class="tabs">

  <button class="tablink active" onclick="openTab(event, 'tab1')">Informatique théorique</button>
  <button class="tablink" onclick="openTab(event, 'tab2')">Programmation</button>
  <button class="tablink" onclick="openTab(event, 'tab3')">Réseaux et sécurité</button>
</div>

<!-- Contenu des onglets -->


<style>
  /* Changer la police et la taille pour tout le paragraphe */
  #tab2 p {
    font-family: Arial, sans-serif;
    font-size: 16px;
  }

  /* Souligner la partie "Théorie des automates" */
  #tab2 h3 {
    text-decoration: underline;
  }

  /* Changer la police, la couleur et l'espacement pour le titre "Informatique théorique" */
  #tab2 h3:first-of-type {
    font-family: 'Times New Roman', Times, serif;
    font-size: 24px;
    color: #2c3e50;
    margin-top: 0;
    margin-bottom: 20px;
    letter-spacing: 1px;
  }
    

  /* Changer la couleur et l'espacement pour le texte */
  #tab2 p {
    color: #333;
    line-height: 1.5;
    margin-bottom: 20px;
  }

  /* Changer les marges pour l'ensemble du bloc */
  #tab2 {
    margin: 20px 0;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
</style>
<style>
  /* Changer la police et la taille pour tout le paragraphe */
  #tab1 p {
    font-family: Arial, sans-serif;
    font-size: 16px;
  }

  /* Souligner la partie "Théorie des automates" */
  #tab1 h3 {
    text-decoration: underline;
  }

  /* Changer la police, la couleur et l'espacement pour le titre "Informatique théorique" */
  #tab1 h3:first-of-type {
    font-family: 'Times New Roman', Times, serif;
    font-size: 24px;
    color: #2c3e50;
    margin-top: 0;
    margin-bottom: 20px;
    letter-spacing: 1px;
  }

  /* Changer la couleur et l'espacement pour le texte */
  #tab1 p {
    color: #333;
    line-height: 1.5;
    margin-bottom: 20px;
  }

  /* Changer les marges pour l'ensemble du bloc */
  #tab1 {
    margin: 20px 0;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
</style>
<style>
  /* Changer la police et la taille pour tout le paragraphe */
  #tab3 p {
    font-family: Arial, sans-serif;
    font-size: 16px;
  }

  /* Souligner la partie "Théorie des automates" */
  #tab3 h3 {
    text-decoration: underline;
  }

  /* Changer la police, la couleur et l'espacement pour le titre "Informatique théorique" */
  #tab3 h3:first-of-type {
    font-family: 'Times New Roman', Times, serif;
    font-size: 24px;
    color: #2c3e50;
    margin-top: 0;
    margin-bottom: 20px;
    letter-spacing: 1px;
  }

  /* Changer la couleur et l'espacement pour le texte */
  #tab3 p {
    color: #333;
    line-height: 1.5;
    margin-bottom: 20px;
  }

  /* Changer les marges pour l'ensemble du bloc */
  #tab3 {
    margin: 20px 0;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
</style>



<div id="tab1" class="tabcontent" style="display:block; ">

  <p>
    <h3>Informatique théorique</h3>
  <p>
    <u>La théorie de la calculabilité :</u> C'est une branche de l'informatique théorique qui étudie la notion de calcul et ce qui peut être calculé. Elle se concentre sur les algorithmes et la capacité des machines à résoudre certains problèmes.<br> La théorie de la calculabilité a été développée par Alan Turing et d'autres chercheurs.<br>
    <u>La théorie de la complexité :</u> Cette théorie étudie la quantité de ressources, comme le temps et l'espace, nécessaires à la résolution d'un problème informatique. <br>Elle vise à déterminer les limites de ce qui peut être calculé en un temps donné.<br>
    <u>La théorie des automates :</u> Cette théorie s'intéresse à la conception, à l'analyse et à la classification des machines à états finis, appelées automates.<br> Elle est utilisée pour la conception de logiciels de reconnaissance de modèles, de programmes de contrôle de systèmes et de systèmes de traitement de l'information.<br>
    <u>La théorie des langages formels :</u> Cette théorie étudie les langages formels, qui sont des langages constitués d'un ensemble de règles formelles qui définissent leur structure et leur syntaxe.<br> Elle est utilisée pour la conception de langages de programmation, de compilateurs et d'analyseurs syntaxiques.<br>
    <u>La théorie de la vérification :</u> Cette théorie vise à développer des méthodes formelles pour la vérification de programmes informatiques.<br> Elle se concentre sur la vérification de la correction des programmes, la détection de bogues et la prédiction de leur comportement.<br>
    <u>La théorie de l'information :</u> Cette théorie étudie la quantité d'information qui peut être transmise entre deux points dans un système de communication, ainsi que les méthodes pour coder, stocker et transmettre cette information.<br> Elle est utilisée dans la conception de systèmes de transmission de données, de codage et de compression de données, et dans l'étude des limites fondamentales de la communication.<br>
    <u>La cryptographie :</u> Cette théorie s'occupe de la conception de techniques pour sécuriser les communications électroniques.<br> Elle comprend des méthodes pour la confidentialité, l'authentification, l'intégrité et la non-répudiation des données.<br> La cryptographie est utilisée dans de nombreux domaines, tels que la sécurité des transactions bancaires en ligne, la protection des données confidentielles, et la sécurité des communications militaires et gouvernementales.<br>
    <a href=" https://www.coursera.org/courses?" target="_blank">Cliquez ici pour plus d'information sur Informatique théorique</a>
  </p>
</div>

</div>
<div id="tab2" class="tabcontent">
  <h3>Programmation</h3>
  <p>
      <u>Les bases de la programmation :</u> il s'agit des éléments de base que tout programmeur doit comprendre pour créer des programmes fonctionnels.<br> Ces éléments comprennent les variables (qui permettent de stocker des données), les conditions (qui permettent de prendre des décisions), les boucles (qui permettent de répéter des actions) et les fonctions (qui permettent de regrouper des instructions et de les réutiliser).<br>

      <u>Les paradigmes de programmation :</u> il s'agit de différentes manières de concevoir et de structurer un programme.<br> Les principaux paradigmes sont la programmation impérative (qui se concentre sur les instructions et les états), la programmation fonctionnelle (qui se concentre sur les fonctions), et la programmation orientée objet (qui se concentre sur les objets).--><br>

      <u>Les structures de données et algorithmes :</u> ces éléments sont utilisés pour organiser et manipuler les données dans un programme. Les structures de données courantes incluent les tableaux, les listes, les arbres et les graphes.<br> Les algorithmes sont des procédures pour résoudre des problèmes spécifiques, comme le tri et la recherche.<br>

      <u>Les langages de programmation :</u> il s'agit des outils utilisés pour écrire des programmes. <br>Les langages courants incluent Python, Java, C++, JavaScript et bien d'autres encore.<br>

      <u>Les frameworks et bibliothèques :</u> il s'agit de collections de code pré-écrit qui peuvent être utilisées pour résoudre des problèmes courants dans un domaine spécifique.<br> Par exemple, Django est un framework pour le développement web, React est une bibliothèque pour la création d'interfaces utilisateur, et TensorFlow est une bibliothèque pour l'apprentissage automatique.<br>

      <u>Les bonnes pratiques de programmation :</u> il s'agit des normes et des conventions pour écrire du code de haute qualité et facilement maintenable.<br> Les bonnes pratiques incluent les tests unitaires (pour vérifier que le code fonctionne correctement), la gestion de versions (pour suivre les modifications du code au fil du temps), et la documentation (pour aider les autres à comprendre le code).<br>
      <a href="https://https://www.codecademy.com/business" target="_blank">Cliquez ici pour plus d'information sur la Programmation</a>
  </p>
</div>

<div id="tab3" class="tabcontent">
  <h3>Réseaux et sécurité</h3>
  <p>
    <u>Les réseaux informatiques :</u>Les réseaux informatiques permettent de connecter des ordinateurs et des équipements entre eux, afin de faciliter la communication et le partage de ressources. <br>Le modèle OSI (Open Systems Interconnection) est un modèle de référence qui permet de décrire les différentes couches impliquées dans la communication entre différents équipements sur un réseau.<br> Le modèle OSI comprend sept couches : physique, liaison, réseau, transport, session, présentation et application.<br>

Les protocoles TCP/IP sont un ensemble de protocoles de communication utilisés pour la transmission de données sur les réseaux informatiques. Ils sont basés sur le modèle OSI et comprennent plusieurs protocoles tels que TCP, IP, UDP, DNS, HTTP, etc.<br>

Les réseaux locaux (LAN) sont des réseaux qui couvrent une zone géographique limitée, comme une entreprise ou un campus universitaire.<br> Ils sont généralement construits avec des équipements tels que des commutateurs, des routeurs, des points d'accès Wi-Fi et des câbles Ethernet.<br>

Les réseaux étendus (WAN) sont des réseaux qui couvrent une zone géographique plus étendue, comme une ville, un pays ou même plusieurs pays.<br> Les réseaux WAN sont souvent construits à l'aide de technologies telles que les lignes louées, les connexions VPN et les réseaux cellulaires.<br>

Le routage est le processus par lequel les données sont acheminées à travers un réseau en utilisant des équipements de réseau tels que des routeurs. <br>Les routeurs sont des dispositifs qui permettent de relier des réseaux entre eux et de diriger le trafic de données vers la destination appropriée.<br>
<u>Les technologies de communication :</u><br>Wi-Fi : Le Wi-Fi est une technologie de communication sans fil qui permet aux appareils de se connecter à Internet ou à un réseau local (LAN) sans avoir besoin de câbles.<br> Il est couramment utilisé dans les maisons, les entreprises et les espaces publics pour accéder à Internet.<br>

Bluetooth : Le Bluetooth est une technologie de communication sans fil à courte portée qui permet aux appareils de se connecter entre eux pour échanger des données ou des informations. <br>Il est souvent utilisé pour connecter des périphériques tels que des écouteurs, des haut-parleurs ou des souris à un ordinateur portable ou un smartphone.<br>

Réseaux mobiles (4G/5G) : Les réseaux mobiles sont des réseaux sans fil qui permettent aux utilisateurs de se connecter à Internet ou à un réseau téléphonique mobile à partir de leur téléphone portable ou d'autres appareils mobiles. <br>La technologie 4G (quatrième génération) est actuellement la plus courante, tandis que la technologie 5G (cinquième génération) est en train de se déployer dans de nombreuses régions.<br>

DNS : Le DNS (Domain Name System) est un système de noms de domaine qui permet de convertir les noms de domaine en adresses IP.<br> Il est utilisé pour faciliter l'accès à des sites web en utilisant des noms de domaine plus conviviaux plutôt que des adresses IP numériques.<br>

VPN : Les réseaux privés virtuels (VPN) sont des réseaux privés qui permettent aux utilisateurs de se connecter à Internet ou à un réseau local de manière sécurisée en utilisant un tunnel chiffré. <br>Les VPN sont couramment utilisés pour protéger la vie privée et la sécurité des utilisateurs en ligne, ainsi que pour accéder à des ressources réseau en dehors de leur réseau local.<br>

 <u>La sécurité informatique : </u>La sécurité informatique est un domaine crucial pour protéger les données et les systèmes informatiques contre les menaces externes et internes.<br> La sécurité informatique se concentre sur la prévention, la détection et la réponse aux incidents de sécurité.<br> Voici quelques-unes des principales composantes de la sécurité informatique :<br>

La cryptographie : c'est la science de la communication sécurisée. Elle utilise des algorithmes mathématiques pour chiffrer les données afin qu'elles ne soient pas accessibles à des tiers non autorisés.<br>

L'authentification : c'est le processus de vérification de l'identité d'un utilisateur. Il peut s'agir d'un nom d'utilisateur et d'un mot de passe, d'une carte à puce, d'une reconnaissance biométrique ou d'autres moyens.<br>

Le contrôle d'accès : c'est la gestion des droits d'accès aux ressources informatiques. Il permet de garantir que seules les personnes autorisées ont accès aux données et aux systèmes critiques.<br>

Les pare-feu : ce sont des logiciels ou des dispositifs matériels qui filtrent le trafic réseau pour empêcher les accès non autorisés aux réseaux et aux systèmes.<br>

Les antivirus : ce sont des logiciels qui détectent et suppriment les logiciels malveillants, tels que les virus, les chevaux de Troie et les logiciels espions, avant qu'ils ne causent des dommages aux systèmes.<br>


<u>Les attaques informatiques : </u>Les attaques informatiques sont des tentatives malveillantes de compromettre la sécurité d'un système informatique.<br> L'hameçonnage est une technique d'ingénierie sociale qui vise à tromper les utilisateurs en leur faisant croire qu'ils communiquent avec une entité fiable, afin de récupérer leurs informations personnelles ou de les rediriger vers des sites malveillants.<br> Les malwares, quant à eux, sont des logiciels malveillants qui infectent les systèmes informatiques et peuvent causer des dommages importants, tels que la suppression de fichiers, la collecte de données sensibles ou la prise de contrôle du système.<br> Les attaques de déni de service visent à rendre un service ou un site web indisponible en surchargeant les serveurs de requêtes. <br>Le piratage informatique est une forme d'attaque qui vise à accéder à un système ou à des données sans autorisation, généralement en exploitant des vulnérabilités de sécurité.<br> Toutes ces attaques peuvent causer des dommages importants aux systèmes informatiques et aux données sensibles, c'est pourquoi il est important de mettre en place des mesures de sécurité pour les prévenir et les contrer.<br>


<u>Les normes et réglementations : </u>Les normes et réglementations en matière de sécurité informatique sont de plus en plus importantes aujourd'hui, en particulier avec la numérisation croissante de la société et les risques de cyberattaques.<br> Voici quelques exemples de normes et réglementations :<br>

Le Règlement général sur la protection des données (RGPD) de l'Union européenne est entré en vigueur en mai 2018 et définit les règles de protection des données personnelles pour toutes les entreprises et organisations opérant dans l'UE.<br>

La norme ISO 27001 définit les exigences pour un système de gestion de la sécurité de l'information (SGSI) et fournit un cadre pour la gestion de la sécurité de l'information.<br>

Le Payment Card Industry Data Security Standard (PCI DSS) est une norme de sécurité pour les entreprises qui traitent des paiements par carte de crédit. Il établit des exigences pour la protection des données de carte de crédit et la sécurité des systèmes de paiement.<br>

Le Health Insurance Portability and Accountability Act (HIPAA) est une réglementation américaine qui établit des normes de confidentialité et de sécurité pour les informations de santé personnelles identifiables (PHI) et vise à protéger la confidentialité des patients et à prévenir les fraudes dans le secteur de la santé.<br>

Ces normes et réglementations aident les entreprises et les organisations à mettre en place des mesures de sécurité solides pour protéger les données et prévenir les incidents de sécurité.<br>

<a href="https://www.netacad.com/courses/networking" target="_blank">Cliquez ici pour plus d'information sur le Réseau et la Sécurité</a>

  </p>
</div>


<script>
function openTab(evt, tabName) {
  // Déclaration des variables
  var i, tabcontent, tablink;

  // Masquer tous les contenus d'onglets
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Supprimer la classe "active" de tous les boutons d'onglet
  tablink = document.getElementsByClassName("tablink");
  for (i = 0; i < tablink.length; i++) {
    tablink[i].className = tablink[i].className.replace(" active", "");
  }

  // Afficher le contenu de l'onglet sélectionné
  document.getElementById(tabName).style.display = "block";

  // Ajouter la classe "active" au bouton d'onglet sélectionné
  evt.currentTarget.className += " active";
}
</script>
