<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
// fonctionnement d'un shortcode
// function afficherTexte() {
//     $monTexte = "Texte provenant de mon shortcode";
//     return $monTexte;
// }
// add_shortcode('nomShortcode', 'afficherTexte');

// Le shortcode du QRCode
// [su_qrcode data="contrebasse" title="contrebasse Gewa" size="100" target="self"]

// Article Güiro en shortcode
function guiroTitre() {
    $titre="Guiro";
    return $titre;
}
add_shortcode('guiroTitre', 'guiroTitre');

function guiroImage() {
    $image="<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Guiro_cubano.jpg/375px-Guiro_cubano.jpg\">";
    return $image;
}
add_shortcode('guiroImage', 'guiroImage');

function guiroDescription() {
    $description="Le güiro est un instrument de musique de la famille des idiophones, fréquent à Cuba et Porto Rico, constitué d'un racloir percé de trous dans lesquels on passe le pouce et le majeur pour le tenir.";
    return $description;
}
add_shortcode('guiroDesc', 'guiroDescription');

function guiroPrix() {
    $prix="14.99€";
    return $prix;
}
add_shortcode('guiroPrix', 'guiroPrix');

// Article Violon en shortcode
function violonTitre() {
    $titre="Violon";
    return $titre;
}
add_shortcode('violonTitre', 'violonTitre');

function violonImage() {
    $image="<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Old_violin.jpg/420px-Old_violin.jpg\">";
    return $image;
}
add_shortcode('violonImg', 'violonImage');

function violonDescription() {
    $description="Le violon est un instrument de musique à cordes frottées. Constitué de 71 éléments de bois1 (érable, buis, ébène, etc.) collés ou assemblés les uns aux autres, il possède quatre cordes accordées généralement à la quinte, que l'instrumentiste, appelé violoniste, frotte avec un archet ou pince avec l'index ou le pouce (en pizzicato).";
    return $description;
}
add_shortcode('violonDesc', 'violonDescription');

function violonPrix() {
    $prix="149€";
    return $prix;
}
add_shortcode('violonPrix', 'violonPrix');

// Article Erkencho en shortcode
function erkenchoTitre() {
    $titre="Erkencho";
    return $titre;
}
add_shortcode('erkenchoTitre', 'erkenchoTitre');

function erkenchoImage() {
    $image="<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Erkencho_del_norte.jpg/330px-Erkencho_del_norte.jpg\">";
    return $image;
}
add_shortcode('erkenchoImg', 'erkenchoImage');

function erkenchoDescription() {
    $description="L’Erkencho est un instrument à vent sud-américain dont l'origine se trouve dans la région Gran Chaco au nord de l'Argentine. Le nom Erkencho signifie « petite Erke », instrument plus grand auquel il ressemble. L'ancien nom indien de l'instrument « Putoto » signifie « coquillage ». Il s'agit d'un tube long de 25 à 33 cm avec une corne de vache ou de chèvre attachée à son extrémité et dans laquelle est insérée une petite anche.";
    return $description;
}
add_shortcode('erkenchoDesc', 'erkenchoDescription');

function erkenchoPrix() {
    $prix="125€";
    return $prix;
}
add_shortcode('erkenchoPrix', 'erkenchoPrix');

// Article Serinette en shortcode
function serinetteTitre() {
    $titre="Serinette";
    return $titre;
}
add_shortcode('serinetteTitre', 'serinetteTitre');

function serinetteImage() {
    $image="<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Serinette_de_Jacotel-Maison_de_la_musique_m%C3%A9canique_%281%29.jpg/330px-Serinette_de_Jacotel-Maison_de_la_musique_m%C3%A9canique_%281%29.jpg\">";
    return $image;
}
add_shortcode('serinetteImg', 'serinetteImage');

function serinetteDescription() {
    $description="Une serinette est un instrument de musique mécanique primitif assimilable à un orgue destiné à apprendre des mélodies courtes à des oiseaux siffleurs, comme la merline ou la perroquette. Elle est à l'origine du verbe « seriner » (répéter de nombreuses fois).";
    return $description;
}
add_shortcode('serinetteDesc', 'serinetteDescription');

function serinettePrix() {
    $prix="179€";
    return $prix;
}
add_shortcode('serinettePrix', 'serinettePrix');

// Article La leçon de piano en shortcode
function pianoTitre() {
    $titre="La leçon de piano";
    return $titre;
}
add_shortcode('pianoTitre', 'pianoTitre');

function pianoImage() {
    $image="<img src=\"https://www.img-music.com/couv53/HD531055505.jpg\">";
    return $image;
}
add_shortcode('pianoImg', 'pianoImage');

function pianoDescription() {
    $description="Des compositions originales pour piano solo provenant du film de Jane Campion oscarisé et recompensé par une palme d'or à Cannes. Le compositeur anglais Michael Nyman est devenu l'un des plus populaires, sinon important, compositeur de musique de film. La bande originale du film La Leçon De Piano est sans doute l'oeuvre la plus connue de ses compositions. La tonalité du film de Jane Campion est parfaitement retranscrite par le style de Nyman, qui emphase la beauté et la richesse du film";
    return $description;
}
add_shortcode('pianoDesc', 'pianoDescription');

function pianoPrix() {
    $prix="15€";
    return $prix;
}
add_shortcode('pianoPrix', 'pianoPrix');

// Article La la land en shortcode
function lalaTitre() {
    $titre="La la land";
    return $titre;
}
add_shortcode('lalaTitre', 'lalaTitre');

function lalaImage() {
    $image="<img src=\"https://www.img-music.com/couv53/HD5310109502.jpg\">";
    return $image;
}
add_shortcode('lalaImg', 'lalaImage');

function lalaDescription() {
    $description="La comédie dramatique romantique La La Land nous fait suivre la rencontre fortuite et les péripéties entre l'aspirante actrice Mia, Emma Stone, et le pianiste de jazz Sebastian, Ryan Gosling, qui s'encouragent à suivre leurs rêves. Ce recueil propose 10 morceaux tirés du film et arrangés pour piano, chant et accords de guitare.<br>
    70 pages<br>
    Niveau intermédiaire<br>
    Découvrez les différents arrangements des chansons du film La La Land.";
    return $description;
}
add_shortcode('lalaDesc', 'lalaDescription');

function lalaPrix() {
    $prix="22€";
    return $prix;
}
add_shortcode('lalaPrix', 'lalaPrix');

// Article Yann Thiersen en shortcode
function yannTitre() {
    $titre="Yann Thiersen 1994-2003";
    return $titre;
}
add_shortcode('yannTitre', 'yannTitre');

function yannImage() {
    $image="<img src=\"https://www.img-music.com/couv53/HD531093130.jpg\">";
    return $image;
}
add_shortcode('yannImg', 'yannImage');

function yannDescription() {
    $description="Retrouvez ici 23 titres dont 13 inédits d' oeuvres pour piano de Yann Tiersen, de 1994 à 2003. Un superbe songbook avec de très belles photos. Son précédent Songbook, 'Amélie Poulain', s'est vendu à plus de 100 000 exemplaires.<br>
    Reliure brochée";
    return $description;
}
add_shortcode('yannDesc', 'yannDescription');

function yannPrix() {
    $prix="29€";
    return $prix;
}
add_shortcode('yannPrix', 'yannPrix');

// Article J.S Bach en shortcode
function jsbTitre() {
    $titre="J.S Bach - Le clavier bien tempéré - volume 1";
    return $titre;
}
add_shortcode('jsbTitre', 'jsbTitre');

function jsbImage() {
    $image="<img src=\"https://www.img-music.com/couv59/HD592470565.jpg\">";
    return $image;
}
add_shortcode('jsbImg', 'jsbImage');

function jsbDescription() {
    $description="András Schiff, pianiste de renommée mondiale, bien connu des amis de Bach par son enregistrement de l’œuvre pour clavier intégrale de Bach, a doigté les deux parties du Clavier bien tempéré. Dans un texte introductif détaillé, il commente des questions relatives à l’exécution de l’œuvre. L’édition Henle de la 1re partie, revue et corrigée dès 1997, ainsi que la révision toute récente de la 2e partie par Yo Tomita (printemps 2007) ont servi de base à l’établissement du texte de la présente édition. De nombreuses remarques viennent compléter l’édition. Les deux parties du Clavier bien tempéré en Urtext Henle sont aussi disponibles sans doigté (HN256), et en partition d'étude. Ce titre est également disponible dans la très belle édition reliée pleine toile. A la qualité musicologique des Éditions Henle, ajoutez le prestige d'un ouvrage de grande qualité qui enrichira durablement votre partothèque !";
    return $description;
}
add_shortcode('jsbDesc', 'jsbDescription');

function jsbPrix() {
    $prix="23€";
    return $prix;
}
add_shortcode('jsbPrix', 'jsbPrix');

// Article Mozart en shortcode
function mozTitre() {
    $titre="Mozart - Sonate en LA Majeur";
    return $titre;
}
add_shortcode('mozTitre', 'mozTitre');

function mozImage() {
    $image="<img src=\"https://www.img-music.com/couv59/HD592222168.jpg\">";
    return $image;
}
add_shortcode('mozImg', 'mozImage');

function mozDescription() {
    $description="K 331 - contient la marche turque (alla turca). Edition Urtext. Wolf-Dieter Seiffert; Doigtés Markus Bellheim";
    return $description;
}
add_shortcode('mozDesc', 'mozDescription');

function mozPrix() {
    $prix="10€";
    return $prix;
}
add_shortcode('mozPrix', 'mozPrix');

// Article Micro Shure en shortcode
function shureTitre() {
    $titre="Micro - Shure Beta 58 A";
    return $titre;
}
add_shortcode('shureTitre', 'shureTitre');

function shureImage() {
    $image="<img src=\"https://thumbs.static-thomann.de/thumb/thumb150x150/pics/prod/105763.jpg\">";
    return $image;
}
add_shortcode('shureImg', 'shureImage');

function shureDescription() {
    $description="Directivité : Supercardioïde<br>
    Bande de fréquences optimisée pour une excellente utilisation sur scène<br>
    Haute résistance contre le larsen et suppression de bruit de fond maximale<br>
    Absorbeur de chocs pneumatique contre les bruits d'impact et de manipulation<br>
    Réponse en fréquence: 50 - 16.000 Hz<br>
    Impédance: 290 Ohm<br>
    Sensibilité: -51,5 dBV/Pa (2,66 mV)<br>
    Dimensions (L x Ø): 160 x 50 mm<br>
    Poids: 278 g<br>
    Pince, adaptateur de réduction de pas de vis 3/8\" et trousse incl.<br>
    Bonnette anti-vent adaptée optionnelle non-fournie (N° d'article 135783)<br>
    Grille de remplacement optionnelle non-fournie (N° d'article 148522)";
    return $description;
}
add_shortcode('shureDesc', 'shureDescription');

function shurePrix() {
    $prix="155€";
    return $prix;
}
add_shortcode('shurePrix', 'shurePrix');

// Article Micro T.Bone en shortcode
function tBoneTitre() {
    $titre="Micro - T.Bone MB 88U Dual";
    return $titre;
}
add_shortcode('tBoneTitre', 'tBoneTitre');

function tBoneImage() {
    $image="<img src=\"https://thumbs.static-thomann.de/thumb/thumb150x150/pics/prod/105763.jpg\">";
    return $image;
}
add_shortcode('tBoneImg', 'tBoneImage');

function tBoneDescription() {
    $description="Connecteurs XLR et USB<br>
    Directivité: Cardioïde<br>
    Réponse en fréquence: 20 - 16.000 Hz<br>
    SPL max.: 137 dB<br>
    Impédance: 600 Ohm<br>
    Convertisseur AN 16 bits/48 KHz<br>
    Ne nécessite pas de pilote USB<br>
    Pour Mac et PC<br>
    Dimensions: 182 x 51 mm<br>
    Poids: 236 g<br>
    Câble USB incl.<br>
    Livré sans pince";
    return $description;
}
add_shortcode('tBoneDesc', 'tBoneDescription');

function tBonePrix() {
    $prix="35€";
    return $prix;
}
add_shortcode('tBonePrix', 'tBonePrix');

// Article Micro Bundle en shortcode
function bundleTitre() {
    $titre="Micro - Shure SM58 Quality Bundle";
    return $titre;
}
add_shortcode('bundleTitre', 'bundleTitre');

function bundleImage() {
    $image="<img src=\"https://thumbs.static-thomann.de/thumb/thumb150x150/pics/prod/475183.jpg\">";
    return $image;
}
add_shortcode('bundleImg', 'bundleImage');

function bundleDescription() {
    $description="1 micro Shure SM58-LCE<br>
    1 pied de micro K&M<br>
    1 câble micro Sommer";
    return $description;
}
add_shortcode('bundleDesc', 'bundleDescription');

function bundlePrix() {
    $prix="144€";
    return $prix;
}
add_shortcode('bundlePrix', 'bundlePrix');

// Article Micro membrane en shortcode
function sm7Titre() {
    $titre="Micro - Shure SM7 B";
    return $titre;
}
add_shortcode('sm7Titre', 'sm7Titre');

function sm7Image() {
    $image="<img src=\"https://thumbs.static-thomann.de/thumb/thumb150x150/pics/prod/129929.jpg\">";
    return $image;
}
add_shortcode('sm7Img', 'sm7Image');

function sm7Description() {
    $description="Directivité: cardioïde<br>
    Réponse en fréquence: 50 Hz - 20 kHz<br>
    Sensibilité: -59,0 dB (1,12 mV)<br>
    Filtre coupe bas<br>
    Rehausseur de médiums<br>
    Impédance : 150 Ohm<br>
    Blindage interférence électromagnétique<br>
    Pince micro fixe avec pas de vis<br>
    Prise XLR<br>
    Bonnette fournie (article de remplacement: 157230)<br>
    Ce micro est idéal pour les voix radios et les amplis guitares. Micro de référence en télé-diffusion!<br>
    Dimensions: 190 x 64 x 96 mm<br>
    Poids: 766 g";
    return $description;
}
add_shortcode('sm7Desc', 'sm7Description');

function sm7Prix() {
    $prix="366€";
    return $prix;
}
add_shortcode('sm7Prix', 'sm7Prix');

// Article Micro Rode en shortcode
function rodeTitre() {
    $titre="Micro - Rode NT1-A Complete Vocal Recording";
    return $titre;
}
add_shortcode('rodeTitre', 'rodeTitre');

function rodeImage() {
    $image="<img src=\"https://thumbs.static-thomann.de/thumb/thumb150x150/pics/prod/235937.jpg\">";
    return $image;
}
add_shortcode('rodeImg', 'rodeImage');

function rodeDescription() {
    $description="<strong>Contient :</strong><br>
    Microphone rode NT1A<br>
    Suspension SM6 deluxe avec filtre anti-pop intégrée<br>
    6 mètres de câble<br>
    Étui<br>
    <strong>Micro NT1A :</strong><br>
    Micro à condensateur large membrane<br>
    Directivité: cardioïde<br>
    Réponse en fréquence: 20 Hz - 20 kHz<br>
    Impédance: 100 Ohm<br>
    SPL max: 137 dB<br>
    Nécessite une alimentation Phantom +48V<br>
    Poids: 326 g<br>
    Garantie constructeur 10 ans";
    return $description;
}
add_shortcode('rodeDesc', 'rodeDescription');

function rodePrix() {
    $prix="159€";
    return $prix;
}
add_shortcode('rodePrix', 'rodePrix');

// Article Casque Bose 700 en shortcode
function boseTitre() {
    $titre="Casque à réduction de bruit Bose 700 Bluetooth noir";
    return $titre;
}
add_shortcode('boseTitre', 'boseTitre');

function boseImage() {
    $image="<img src=\"https://static.fnac-static.com/multimedia/Images/FR/MDM/c7/5b/b2/11688903/1540-1/tsp20191213032546/Casque-a-reduction-de-bruit-Bose-Headphones-700-Bluetooth-Noir.jpg\">";
    return $image;
}
add_shortcode('boseImg', 'boseImage');

function boseDescription() {
    $description="<strong>Bienvenue dans la réalité augmentée.</strong><br>
    Le casque Bose Noise Cancelling Headphones 700 répond à toutes vos attentes, et les dépasse même à bien des égards. Imaginez un casque intelligent qui vous permet de garder la tête haute tout en bénéficiant d’un accès simplifié aux assistants vocaux. Recevez vos appels en toute confiance avec le système de micro le plus puissant du marché pour la capture vocale. Le casque est également doté de Bose AR, la toute première plateforme de réalité augmentée audio offrant de nouvelles expériences époustouflantes.<br>
    -BLUETOOTH<br>
    -COMMANDES TACTILES INTUITIVES<br>
    -SYSTEME MICROPHONE INEGALE<br>
    -AUTONOMIE DE LA BATTERIE : JUSQU’A 20H<br>
    -REDUCTION DE BRUIT MODULABLE<br>
    -COMPATIBILITE BOSE AR<br>
    Système de micro adaptatif pour une capture vocale supérieure<br>
    Le casque Bose Headphones 700 est équipé d’un système à quatre microphones unique sur le marché, qui identifie et isole votre voix tout en réduisant le bruit environnant. Vous pourrez entendre et être entendu comme jamais, même dans les environnements bruyants.";
    return $description;
}
add_shortcode('boseDesc', 'boseDescription');

function bosePrix() {
    $prix="319.99€";
    return $prix;
}
add_shortcode('bosePrix', 'bosePrix');

// Article Casque Sony en shortcode
function sonyTitre() {
    $titre="Casque bluetooth à réduction de bruit Sony WH-1000XM3 Noir Casque audio Sony ";
    return $titre;
}
add_shortcode('sonyTitre', 'sonyTitre');

function sonyImage() {
    $image="<img src=\"https://static.fnac-static.com/multimedia/Images/FR/MDM/03/f5/85/8779011/1540-1/tsp20200131095933/Casque-Bluetooth-a-reduction-de-bruit-Sony-WH-1000XM3-Noir.jpg\">";
    return $image;
}
add_shortcode('sonyImg', 'sonyImage');

function sonyDescription() {
    $description="<strong>Casque Bluetooth sans fil et à réduction de bruit</strong><br>
    La meilleure réduction de bruit du marché*<br>
    Arceau<br>
    <strong>WH-1000XM3</strong><br>
    La meilleure réduction de bruit du marché* toujours plus performante. Modes On/Off ou Ambient sound.<br>
    Instantanément, en posant la main sur l'oreillette, la fonction Quick Attention réduit le volume de la musique et coupe la réduction de bruit pour percevoir les sons environnants.<br>
    Jusqu'à 38 h d'écoute sans fil en Bluetooth. Recharge rapide (10 min = 5 h de lecture).<br>
    Nouvelle fonction <> pour utiliser la réduction de bruit même sans musique.<br>
    Audio Haute Résolution (Hi-Res) pour utiliser la réduction de bruit même sans musique. Audio Haute Résolution (Hi-Res) pour profiter d'un son de très haute qualité, même sans fil grâce au LDAC. Appels téléphoniques nets et précis grâce aux 2 micros.<br>
    Prise d'appels et commandes de la musique sur l'oreillette tactile ou via l'application <>.<br>
    Google Assistant intégré pour piloter à la voix chacune des activités, sans regarder le téléphone.<br>
    Personnalisation des réglages d'écoute : égaliseur, optimisation de la réduction de bruit en fonction de la morphologie du visage et de la pression atmosphérique, reconnaissance de l'activité de l'utilisateur.<br>
    Nouveau design fin et léger, oreillettes englobantes, isolnates et confortables. Casque pliable.<br>
    Nouvelles couleurs et finitions sur le casque et la pochette de transport.";
    return $description;
}
add_shortcode('sonyDesc', 'sonyDescription');

function sonyPrix() {
    $prix="279.99€";
    return $prix;
}
add_shortcode('sonyPrix', 'sonyPrix');

// Article Casque Beats en shortcode
function beatsTitre() {
    $titre="Casque supra-auriculaire sans fil Beats solo3 Or Rose";
    return $titre;
}
add_shortcode('beatsTitre', 'beatsTitre');

function beatsImage() {
    $image="<img src=\"https://static.fnac-static.com/multimedia/Images/FR/NR/6f/76/7f/8353391/1540-1/tsp20160913175531/Casque-supra-auriculaire-sans-fil-Beats-Solo3-Or-Rose.jpg\">";
    return $image;
}
add_shortcode('beatsImg', 'beatsImage');

function beatsDescription() {
    $description="Jusqu’à 40 heures d’autonomie, Batterie : Lithium-ion rechargeable, Contrôle intégré des appels et de la musique, Contrôle intégré du volume, Micro beamforming pour des appels d’une clarté optimale, Isolation phonique, Bluetooth stéréo, Lecture en mode passif via câble RemoteTalk, Câble RemoteTalk avec commandes intégrées, Jauge de batterie LED, Recharge via un câble micro-USB";
    return $description;
}
add_shortcode('beatsDesc', 'beatsDescription');

function beatsPrix() {
    $prix="159.99€";
    return $prix;
}
add_shortcode('beatsPrix', 'beatsPrix');

// Article Ecouteurs Jabra en shortcode
function jabraTitre() {
    $titre="Ecouteurs sans fil Jabra Elite Active 65T bleu et or";
    return $titre;
}
add_shortcode('jabraTitre', 'jabraTitre');

function jabraImage() {
    $image="<img src=\"https://static.fnac-static.com/multimedia/Images/FR/MDM/20/06/7c/8128032/1540-1/tsp20200130192059/Ecouteurs-sans-fil-Jabra-Elite-Active-65T-Bleu-et-Or.jpg\">";
    return $image;
}
add_shortcode('jabraImg', 'jabraImage');

function jabraDescription() {
    $description="<strong>Jabra Elite Active 65t</strong><br>
    Conçu pour vous offrir un son exceptionnel en appels, musique et sport.<br>
    Sans condition.<br>
    Port sans fil confortableet sécurisé.<br>
    Ces écouteurs intra-auriculaires d'une grande stabilité tiennent parfaitement en place, et conviennent ainsi aux personnes les plus actives.<br>
    Idéal pour les styles de vie actifs.<br>
    Le Jabra Elite Active 65t satisfait la norme IP56 et offre une garantie de 2ans contre la transpiration et la poussière*. Où que vous soyez et quelle que soit votre activité, vous profitez d'une liberté absolue pour le sport, la musique et les appels.<br>
    Dynamisez vos performances.<br>
    Avec 5 heures d'autonomie de la batterie en une seule charge, et jusqu'à 15 heures en tout avec l'étui de recharge de poche fourni, vos besoins d'écoute sont satisfaits du matin au soir.<br>
    Une connectivité infaillible.<br>
    La stabilité sans fil Jabra de 3ème génération contribue à réduire les interruptions, tant au niveau des appels que de la musique.<br>
    Avec, à l?arrivée une qualité d'écoute exceptionnelle.<br>
    La musique, comme vous souhaitez l'entendre.<br>
    Écoutez votre musique selon vos préférences. Personnalisez votre son avec l'égalisateur personnalisable de l'application Jabra Sound+.<br>
    Des commandes vocales simplifiées.<br>
    Avec le Jabra Elite Active 65t, vous pouvez vous connecter instantanément à Alexa**, Siri® ou Google Assistant, vous permettant d'obtenir rapidement les informations dont vous avez besoin - qu'il s'agisse de prendre des rendez-vous, de trouver des événements proches de chez vous, ou de réentendre vos messages. Et grâce au Bluetooth® 5.0, vous pouvez simplement connecter l'Elite Active 65t à votre smartphone.<br>
    Optimisez vos séances d'entraînement. En bref:<br>
    <strong>Jabra Elite Active65t</strong><br>
    - Port sans fil confortable et sécurisé. Port amélioré pour un confort renforcé.<br>
    - Une garantie à la hauteur de vos exigences. Classification IP56, avec une garantie de 2 ans contre la transpiration et la poussière*.<br>
    - Du matin au soir. Autonomie de batterie allant jusqu'à 5 heures, 15 heures avec l'étui de recharge.<br>
    - Une connectivité infaillible. Stabilité sans fil hors pair permettant de réduire les interruptions d'appels et de musique.<br>
    - La musique , comme vous souhaitez l'entendre.<br>
    <strong>Personnalisez votre musique grâce à l'égaliseur personnalisable.</strong><br>
    - Des commandes vocales simplifiées. Touche d'accès direct à Amazon Alexa**, Siri®, et Google Assistant<br>
    - Optimisez vos séances d'entraînement. Accéléromètre embarqué pour analyser vos exercices<br>
    *Enregistrement indispensable avec l'appli Jabra Sound+<br>
    **Dépend du système d'exploitation sportifs.<br>
    <strong>Comment effectuer l'appairage</strong><br>
    Maintenez le bouton sur l'embout droit appuyé pendant 3 secondes et le bouton gauche sur l'embout gauche pour l'activer, puis suivez les instructions vocales pour l'appairage de votre téléphone.<br>
    Port sans fil confortable et sécurisé.<br>
    Ces écouteurs intra-auriculaires d’une grande stabilité tiennent parfaitement en place.<br>
    Idéal pour les styles de vie actifs.<br>
    Classification IP56, avec une garantie de 2 ans contre la transpiration et la poussière*.";
    return $description;
}
add_shortcode('jabraDesc', 'jabraDescription');

function jabraPrix() {
    $prix="149.99€";
    return $prix;
}
add_shortcode('jabraPrix', 'jabraPrix');

// Article Lunettes Bose en shortcode
function glassTitre() {
    $titre="Lunettes Bose Frames Alto";
    return $titre;
}
add_shortcode('glassTitre', 'glassTitre');

function glassImage() {
    $image="<img src=\"https://static.fnac-static.com/multimedia/Images/FR/MDM/ce/5b/b2/11688910/1540-1/tsp20190927145351/Lunettes-Bose-Frames-Alto.jpg\">";
    return $image;
}
add_shortcode('glassImg', 'glassImage');

function glassDescription() {
    $description="Découvrez Bose Frames, les premières lunettes de soleil avec enceintes de Bose. Des composants électroniques miniatures Bose sont cachés dans les branches. Ils vous permettent de profiter d’un son riche et enveloppant que vous êtes le seul à entendre. Vivez une expérience audio révolutionnaire sans écouteurs, et restez à l’écoute du monde qui vous entoure tout en profitant discrètement de votre musique. Choisissez entre deux styles intemporels incluant chacun des détails et des matériaux élégants, comme des charnières plaquées or. Alto se distingue par un look classique et angulaire, tandis que Rondo est plus original, avec des verres ronds et légèrement plus petits. Les lunettes Bose Frames comprennent un microphone discret pour prendre des appels et accéder à Siri et à l’Assistant Google. Les lunettes filtrent jusqu’à 99 % des UVA et UVB, et permettent de vous connecter facilement en Bluetooth®. La configuration est également très simple. Mettez vos lunettes. Appuyez sur le bouton de mise en marche. Et l’application Bose Connect se charge du reste ! Elle rend même vos lunettes Bose Frames plus performantes au fil du temps en vous proposant des mises à jour pour accéder à de nouvelles fonctions, comme Bose AR — une plate-forme inédite de réalité augmentée audio, qui permet de découvrir de nouvelles façons de voyager, de faire du sport, d’apprendre, de jouer et plus encore. Chaque paire de Bose Frames est prête pour Bose AR : il suffit d’une simple mise à jour logicielle pour activer cette fonction.<br>
    Caractéristiques :<br>
    Des lunettes de soleil équipées du son Bose.<br>
    Les composants électroniques miniatures de Bose permettent de produire un son à la fois riche et immersif que vous êtes le seul à entendre.<br>
    Restez à l’écoute du monde qui vous entoure tout en profitant discrètement de votre musique, grâce à un design révolutionnaire sans écouteurs.<br>
    Choisissez entre deux styles intemporels incluant chacun des détails et des matériaux élégants, comme des charnières plaquées or.<br>
    Alto se distingue par un look classique et angulaire, tandis que Rondo est plus original, avec des verres ronds et légèrement plus petits.<br>
    Passez des appels et accédez à Siri et à l’Assistant Google à partir du micro parfaitement intégré.<br>
    Filtrez jusqu’à 99 % des UVA et des UVB grâce à des verres teintés uniformément.<br>
    Restez connecté sans fil grâce à la connectivité Bluetooth®.<br>
    L’application Bose Connect permet de configurer vos lunettes, de personnaliser vos paramètres et d’accéder aux mises à jour<br>
    Compatible avec Bose AR, une plate-forme inédite de réalité augmentée audio<br>
    Inclus : étui de protection, pochette microfibre et câble de charge USB avec connecteur magnétique.";
    return $description;
}
add_shortcode('glassDesc', 'glassDescription');

function glassPrix() {
    $prix="229.99€";
    return $prix;
}
add_shortcode('glassPrix', 'glassPrix');

// formulaire de contact page Contact
function formContact() {
    $form = '<legend>Besoin d\'aide, de conseil ou autre ? Remplissez le formulaire et je vous répondrai sous 48h maximum</legend>
    <div id="after_submit"></div>
    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
      <div class="row">
        <label class="required" for="name">Votre nom : </label><br />
        <input id="name" class="input" name="name" type="text" value="" size="30" placeholder="Votre nom"/><br />
        <span id="name_validation" class="error_message"></span>
      </div>
      <div class="row">
        <label class="required" for="email">Votre mail :</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" placeholder="Votre mail"/><br />
        <span id="email_validation" class="error_message"></span>
      </div>
      <div class="row">
        <label class="required" for="message">Vore message :</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Votre message"></textarea><br />
        <span id="message_validation" class="error_message"></span>
      </div>
        
        <input id="submit_button" type="submit" value="Send email" />
    </form>';
    return $form;
}
add_shortcode('form', 'formContact');

// affichage de la page d'accueil
function affichAccueil() {
    $home="<img src=\"https://lh4.googleusercontent.com/proxy/idjStX-rAvVooybyp6in4GnBDlt9GA_vULxujw4dMs_Gt_EfU5hcA3PRqVNNiVI4uH-AwG8JSqBTR39vq4yZf71pZxMOS9uggbKC5HCKHaNfOvImwyouFe3L2_KgMCzXioJsY7BNjC4vgq_FoXSDvnJTZ6k\"><p>Le magasin Shop Music Lyon a ouvert ses portes en 2008, à quelques centaines de mètres du stade Gerland.<br>
    L’objectif de cet espace était d’offrir à la clientèle locale un choix immense de matériel. Avec ses 800m2 d’exposition sur une hauteur sous plafond de 7 mètres, le contrat est largement rempli.<br>
    Dès l’entrée, l’espace des claviers et des pianos acoustiques affiche le luxe de l’endroit. A sa suite, l’énorme volume consacré à la guitare est tout simplement époustouflant : plus de 800 guitares, 4 auditoriums (amplis guitares, amplis basses, guitares électriques vintage, guitares acoustiques de luthier haut de gamme) ainsi qu’un rayon dédié aux guitares Métal, s’alignent dans un décor chaleureux et ajouré. Le rayon batterie et son auditorium de cymbales concluent le rez-de-chaussée de ce lieu d’exception.<br>
    A l’étage la Sono/Light, le DJ ainsi que le Studio font la part belle à l’Audio Pro qui saura séduire l’ensemble des producteurs et ingénieurs du son de passage. Un auditorium d’enceintes monitoring ainsi qu’un espace consacré aux Studios Professionnels accueilleront les plus pointus d’entre vous.<br>
    Grâce à notre équipe de conseillers passionnés et en phase avec la scène musicale locale, Star’s Music Lyon est rapidement devenu le passage obligé de tous les acteurs de la musique du Sud Est.";
    return $home;
}
add_shortcode('home', 'affichAccueil');
