<?php

namespace App\DataFixtures;

use App\Entity\Page;
use App\Entity\PageCategory;
use App\Entity\SubService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $services = [
            [
                "name" => "Audit",
                "resume" => "L’audit est une procédure qui certifie les comptes d’une entreprise. Au-delà de cette mission de contrôle, l’auditeur grâce à son analyse permet à son client de prévoir les futures démarches à effectuer. L’audit permet donc une analyse dans de nombreux domaines très différents : la comptabilité, la finance, le management, le processus de développement d’un produit etc.",
                "icon" => "flaticon-analysis",
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
                "resume" => "L'Expert Comptable assiste les clients dans la tenue et/ou la supervision de leur comptabilité ; nous prenons en charge l’ensemble de vos obligations comptables et fiscales. En matière de comptabilité générale, notre mission consiste à tenir, superviser, finaliser la tenue de vos comptes pour que vous puissiez consacrer vos talents et votre énergie au succès de votre entreprise.",
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
                "resume" => "Le rôle du conseiller juridique est avant tout d’accompagner et de donner des conseils à ses clients en matière de justice pour qu’ils restent dans la légalité ou au contraire qu’ils fassent valoir leurs droits. Il a également pour mission de régler les contentieux de ses clients mais aussi de veiller à leurs intérêts . Il est consulté à titre d’expert.",
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
                "resume" => "Un conseiller fiscal aide les particuliers et entreprises à s'y retrouver dans la réglementation fiscale, pour leur permettre de : les assister dans leurs opérations et l'établissement de leurs déclarations pour être en règle; argumenter avec l'administration fiscale en cas de litige ou de contentieux. Le rôle du fiscaliste est de veiller à la juste application du cadre juridique et fiscal conformément à la législation en cours.",
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
                "resume" => "Expert dont la tâche essentielle est l'assistance aux personnes confrontées à des difficultés sociales, économiques, professionnelles, ou encore psychologiques, le conseiller social exerce une profession aux missions très diverses.",
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
                "resume" => "La comptabilité de gestion permet de prendre des décisions autant présentes que futures pour l’entreprise, de récolter rapidement de l’information et des données cohérentes et flexibles, d’obtenir des rapports sectoriels précis sur les biens et services, les clients et les employés. La comptabilité de gestion a pour but d’analyser les coûts (directs, indirects, incorporables, non incorporables, fixes et variables) afin d’expliquer le résultat. Elle détermine pour chaque dépense et chaque charge, quelle part revient à tel produit et à telle activité de l’entreprise. Ainsi, les déficits et les dépenses incontrôlées sont évités au minimum.",
                "icon" => "flaticon-money",
                "text" => "
                    - Implémentation du contrôle de gestion
                    - Mise en place des tableaux de bord 
                    - Mise en place  de la comptabilité de gestion
                    - Etablissement des budgets
                    - Outils de suivi budgétaire 
                    - Externalisation de l'audit interne
                    - Accompagnement à l'établissement des comptes  en IFRS
                    - Etats consolidés 
                    - Test de dépréciation 
                    - Accompagnement en restructuration ( fusion, scission,  apport partiel d'actif) 
                    - Redaction de manuel de procédures comptables et financiers 
                    - Prix de transfert
                "
            ],
            [
                "name" => "Conseil en finances",
                "resume" => "On attend d'un conseiller financier l'assistance de particuliers ou de professionnels dans la gestion de leur patrimoine financier. Pour cela, il devra délivrer des recommandations et des conseils de placements financiers et/ou de bonne gestion de porte-feuilles clients en suivant au jour le jour le cours de la Bourse ainsi que l'évolution des principaux produits financiers disponibles sur le marché. Il devra également effectuer des ventes de produits auprès de sa clientèle tout en assurant la promotion des nouveaux produits financiers. Il pourra être amené à négocier des taux bancaires et des transactions.",
                "icon" => "flaticon-wallet",
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
                "resume" => "L’avantage de faire appel à un conseiller informatique indépendant, est que vous pouvez être sûr que le consultant pense uniquement à la solution qui servirait le mieux votre entreprise. Un consultant vous donne des conseils objectifs et valorisant, à court et à long terme. Une fois que vous avez une analyse objective des solutions informatiques qui soutiennent le mieux votre entreprise, vous pouvez toujours choisir un partenaire informatique représentant le système que vous avez décidé de mettre en œuvre. Les systèmes informatiques sont essentiels à votre entreprise et représentent, en termes de temps et d’argent, un investissement important.",
                "icon" => "flaticon-technical-support",
                "text" => "
                    - Installation de logiciels comptables
                    - Installation de logiciels d'etats financiers
                "
            ]/*,
            [
                "name" => "Conseils en comptable et informatique",
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
            ]*/
        ];

        $subServices = [
            [
                "Audit légal et commissariat aux comptes",
                "Audit de gestion",
                "Audit fiscal",
                "Audit social",
                "Audit organisationnel",
                "Audit de conformité",
                "Audit d'acquisition",
                "Audit comptable et contractuel",
            ],
            [
                "Accompagnement à la création d'entreprise ( diagnostic du projet de création et conseils)",
                "Réalisation du business plan",
                "Accompagnement pour la recherche de financement",
                "Tenue de comptabilité",
                "Assistance comptable",
                "Révision de comptabilité",
                "Etablissement des comptes annuels",
                "Etablissement des comptes prévisionnels",
                "Réalisation des inventaires physiques",
                "Evaluation d'entreprise",
                "Expertise de gestion et gestion financière",
                "Mise en place des livres légaux "
            ],
            [
                "Expertise Judiciaire",
                "Rédaction des statuts",
                "Rédaction des rapports de gestion",
                "Organisation et tenue des assemblées et diverses réunions dans les entreprises",
                "Création des registres et livres légaux",
                "Modifications",
                "Recouvrement de créances",
                "Liquidation",
                "Restructuration",
                "Redressement judiciaire"
            ],
            [
                "Etablissement des déclarations fiscales",
                "Abonnement fiscal",
                "Optimisation fiscal",
                "Assistance en matière de contrôle et du contentieux fiscal"
            ],
            [
                "Accompagnement au recrutement du personnel",
                "Contrat de travail",
                "Constitution du dossier social",
                "Traitement de la paie",
                "Registres obligatoires",
                "Déclarations sociales",
                "Traitement social du départ du salarié",
                "Evaluation des salariés",
                "Bilan social",
                "Diagnostic social",
                "Evaluation des engagements de retraite"
            ],
            [
                "Implémentation du contrôle de gestion",
                "Mise en place des tableaux de bord",
                "Mise en place  de la comptabilité de gestion",
                "Etablissement des budgets",
                "Outils de suivi budgétaire",
                "Externalisation de l'audit interne",
                "Accompagnement à l'établissement des comptes  en IFRS",
                "Etats consolidés",
                "Test de dépréciation",
                "Accompagnement en restructuration ( fusion, scission,  apport partiel d'actif)",
                "Redaction de manuel de procédures comptables et financiers",
                "Prix de transfert"
            ],
            [
                "Business plan et compte d'exploitation prévisionnel",
                "Recherche de financement",
                "Levée de fonds",
                "Plan de financement",
                "Evaluation d'entreprise",
                "Diagnostic financier",
                "Plan de trésorerie"
            ],
            [
                "Installation de logiciels comptables",
                "Installation de logiciels d'etats financiers"
            ]
        ];

        $PageCategory = (new PageCategory())
            ->setName("Services");
        $manager->persist($PageCategory);
        $i = 0;
        foreach ($services as $element) {
            $Page = (new Page())
                ->setName($element['name'])
                ->setResume($element['resume'])
                ->setText($element["text"])
                ->setIcon($element["icon"])
                ->addCategory($PageCategory);
            $manager->persist($Page);

            foreach ($subServices[$i] as $p) {
                $subService = (new SubService())
                    ->setName($p)
                    ->setPage($Page);
                $manager->persist($subService);
            }
            $i = $i + 1;
            unset($Page);
        }


        $manager->flush();
    }
}
