<?php
// Données de démonstration (à remplacer par la base de données plus tard)
$OFFERS = [
  ['id'=>1,'title'=>'Stage UX/UI','city'=>'Paris','type'=>'Stage','detail'=>'2 mois'],
  ['id'=>2,'title'=>'Alternance web','city'=>'Lyon','type'=>'Alternance','detail'=>'12 mois'],
  ['id'=>3,'title'=>'Job vendeur','city'=>'Lille','type'=>'Job étudiant','detail'=>'week-end'],
];
$RECO = [
  ['id'=>11,'title'=>'Assistant marketing','company'=>'Startup EdTech','city'=>'Paris','type'=>'Stage'],
  ['id'=>12,'title'=>'Développeur web junior','company'=>'Agence digitale','city'=>'Lyon','type'=>'Alternance'],
  ['id'=>13,'title'=>'Vendeur étudiant','company'=>'Boutique mode','city'=>'Lille','type'=>'Job étudiant'],
];
function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function norm($s){ return mb_strtolower(trim((string)$s), 'UTF-8'); }