<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\PageCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $services = [
            [
                "name" => "Audit",
                "resume" => "",
                "icon" => "flaticon-diagram",
                "text" => "
                    - Audit légal et commissariat aux comptes
                    - Audit de gestion
                    - Audit fiscal 
                    - Audit social
                    - Audit organisationnel 
                    - Audit de conformité 
                    - Audit d'acquisition 
                    - Audit comptable et contractuel
                "
            ],
            [
                "name" => "Expertise Comptable",
                "resume" => "",
                "icon" => "flaticon-diagram",
                "text" => "
                    - Accompagnement à la création d'entreprise ( diagnostic du projet de création et conseils)
                    - Réalisation du business plan
                    - Accompagnement pour la recherche de financement 
                    - Tenue de comptabilité 
                    - Assistance comptable 
                    - Révision de comptabilité 
                    - Etablissement des comptes annuels 
                    - Etablissement des comptes prévisionnels 
                    - Réalisation des inventaires physiques 
                    - Evaluation d'entreprise 
                    - Expertise de gestion et gestion financière 
                    - Mise en place des livres légaux 
                "
            ],
            [
                "name" => "Conseil juridique",
                "resume" => "",
                "icon" => "flaticon-team",
                "text" => "
                    - Expertise Judiciaire 
                    - Rédaction des statuts 
                    - Rédaction des rapports de gestion
                    - Organisation et tenue des assemblées et diverses réunions dans les entreprises 
                    - Création des registres et livres légaux
                    - Modifications
                    - Recouvrement de créances 
                    - Liquidation 
                    - Restructuration 
                    - Redressement judiciaire
                "
            ],
            [
                "name" => "Conseil fiscal",
                "resume" => "",
                "icon" => "flaticon-investor",
                "text" => "
                    - Etablissement des déclarations fiscales
                    - Abonnement fiscal
                    - Optimisation fiscal 
                    - Assistance en matière de contrôle et du contentieux fiscal
                "
            ],
            [
                "name" => "Conseil social",
                "resume" => "",
                "icon" => "flaticon-employee",
                "text" => "
                    - Accompagnement au recrutement du personnel 
                    - Contrat de travail 
                    - Constitution du dossier social
                    - Traitement de la paie
                    - Registres obligatoires
                    - Déclarations sociales
                    - Traitement social du départ du salarié 
                    - Evaluation des salariés 
                    - Bilan social
                    - Diagnostic social 
                    - Evaluation des engagements de retraite
                "
            ],
            [
                "name" => "Conseils en Gestion",
                "resume" => "",
                "icon" => "flaticon-money",
                "text" => "
                    - Implémentation du contrôle de gestion
                    - Mise en place des tableaux de bord 
                    - Mise en place  de la comptabilité de gestion
                    - Etablissement des budgets
                    - Outils de suivi budgétaire 
                    - Externalisation de l'audit interne
                "
            ],
            [
                "name" => "Conseil en finances",
                "resume" => "",
                "icon" => "flaticon-money",
                "text" => "
                    - Business plan et compte d'exploitation prévisionnel 
                    - Recherche de financement 
                    - Levée de fonds
                    - Plan de financement 
                    - Evaluation d'entreprise 
                    - Diagnostic financier
                    - Plan de trésorerie
                "
            ],
            [
                "name" => "Conseils en gestion et informatique",
                "resume" => "",
                "icon" => "flaticon-employee",
                "text" => "
                    - Installation de logiciels comptables
                    - Installation de logiciels d'etats financiers
                "
            ],
            [
                "name" => "Conseils en gestion et informatique",
                "resume" => "",
                "icon" => "flaticon-employee",
                "text" => "
                    - Accompagnement à l'établissement des comptes  en IFRS
                    - Etats consolidés 
                    - Test de dépréciation 
                    - Accompagnement en restructuration ( fusion, scission,  apport partiel d'actif) 
                    - Redaction de manuel de procédures comptables et financiers 
                    - Prix de transfert
                "
            ]
        ];
        $PageCategory = (new PageCategory())
            ->setName("Services");
        $manager->persist($PageCategory);
        foreach($services as $element){
            $Page = (new Page())
                ->setName($element['name'])
                ->setResume("")
                ->setText($element["text"])
                ->setIcon($element["icon"])
                ->addCategory($PageCategory);
            $manager->persist($Page);
            unset($Page);
        }
        $manager->flush();
    }
}
