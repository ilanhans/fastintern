<?php
declare(strict_types=1);

/**
 * Données de démonstration partagées par recruteur.php et detail_offre.php.
 * Pas de base de données dans le projet : à remplacer par des requêtes SQL.
 */

function getOffres(): array
{
    return [
        1 => [
            'id' => 1, 'type' => 'Stage', 'titre' => 'Stage Développeur Web', 'icone' => '</>',
            'entreprise' => 'TechCompany', 'domaine' => 'Informatique', 'ville' => 'Paris', 'dept' => '75',
            'duree' => '6 mois', 'teletravail' => 'Télétravail partiel', 'statut' => 'Active', 'candidatures' => 30,
            'description' => "Nous recherchons un stagiaire développeur web pour participer à la création et à l'amélioration de nos applications.",
            'missions' => ['Développer des fonctionnalités web', 'Tester les applications.', 'Corriger les bugs.'],
            'competences' => ['HTML et CSS', 'JavaScript', 'Travail en équipe'],
        ],
        2 => [
            'id' => 2, 'type' => 'Alternance', 'titre' => 'Alternance Marketing Digital', 'icone' => '📢',
            'entreprise' => 'DataTech', 'domaine' => 'Marketing', 'ville' => 'Paris', 'dept' => '75',
            'duree' => '12 mois', 'teletravail' => 'Présentiel', 'statut' => 'Active', 'candidatures' => 70,
            'description' => "Rejoignez notre équipe marketing pour piloter des campagnes digitales et analyser leurs performances.",
            'missions' => ['Gérer les réseaux sociaux', 'Créer des campagnes emailing', 'Suivre les statistiques de performance.'],
            'competences' => ['Réseaux sociaux', 'Rédaction web', 'Esprit d\'analyse'],
        ],
        3 => [
            'id' => 3, 'type' => 'Job étudiant', 'titre' => 'Vendeur étudiant', 'icone' => '🛍',
            'entreprise' => 'Boutique mode', 'domaine' => 'Commerce', 'ville' => 'Lille', 'dept' => '59',
            'duree' => 'Week-end + mercredi', 'teletravail' => 'Présentiel', 'statut' => 'Active', 'candidatures' => 12,
            'description' => "Accueil client, caisse et mise en rayon, avec des horaires compatibles avec vos cours.",
            'missions' => ['Accueillir et conseiller les clients', 'Tenir la caisse', 'Mettre en rayon.'],
            'competences' => ['Sens du contact', 'Ponctualité', 'Travail en équipe'],
        ],
    ];
}

function getCandidatsRecents(): array
{
    return [
        ['nom' => 'Camille Paulin', 'poste' => 'Développeur Web', 'date' => '03/10/2026', 'badge' => 'Top profil'],
        ['nom' => 'Martin Bernard', 'poste' => 'Marketing Digital', 'date' => '07/10/2026', 'badge' => 'Top profil'],
        ['nom' => 'Martin Bernard', 'poste' => 'Assistante RH', 'date' => '06/10/2026', 'badge' => 'Top profil'],
    ];
}
