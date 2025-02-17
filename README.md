# YouVento_Laravel_Brief_14
Développement d'une application web monolithique en utilisant Laravel.

Contexte du projet
YouCode souhaite dynamiser la vie étudiante en facilitant la création et la gestion de clubs (tech, design, robotique, etc.) et d'événements associés (ateliers, conférences, hackathons). L'objectif est de fournir un outil centralisé pour les administrateurs et les étudiants, permettant de promouvoir les activités, gérer les inscriptions et encourager les collaborations.

​

Objectif

Développer une application web où les administrateurs peuvent gérer les clubs et leurs événements, tandis que les étudiants peuvent explorer les clubs existants, s’y inscrire et consulter le calendrier des activités.

​

​

Fonctionnalités Clés:

Gestion des clubs : Création, édition, suppression et archivage des clubs (nom, description, logo, catégorie).

Gestion des événements : Ajout d'événements liés à un club (date, lieu, description, capacité maximale).

Calendrier interactif : Visualisation des événements à venir.

Tableau de bord étudiant : Liste des clubs/événements auxquels l'étudiant est inscrit.

​

​

Système d'authentification :

Administrateurs : Accès complet à la gestion.

Étudiants : Inscription aux clubs/événements via un compte.

​

​

User Stories:

En tant qu'admin, je peux créer un club en renseignant ses détails et en uploadant un logo.

En tant qu'admin, je peux planifier un événement pour un club (ex: "Atelier IA le 15/10").

En tant qu'admin, je peux archiver un club temporairement (SoftDelete).

En tant qu'étudiant, je peux m'inscrire à un club ou un événement depuis mon compte.

En tant qu'étudiant, je peux consulter un calendrier regroupant tous les événements.

[Bonus] Envoi de notifications par email aux membres lors de la création d'un événement.

​

​

Technologies Requises:

Laravel et Blade pour le templating, JavaScript pour les interactions (calendrier avec FullCalendar.js).

Authentification : Laravel Sanctum ou Laravel UI Auth. Base de données : PostgreSQL avec relations clubs → events (One-to-Many) et events ↔ users (Many-to-Many via registrations). Tables Principales : users, clubs, events, registrations (pour les inscriptions). Upload de fichiers : Stockage des logos de clubs via Laravel Filesystem.

Modalités pédagogiques
ravail: individuel.

Durée de travail: 5 jours

Date de lancement du brief : 17/02/2025 à 09:15 AM

Date limite de soumission: 21/02/2025 avant 05:30 PM

Modalités d'évaluation
Vous présenterez votre travail en français:
- 5 minutes : Simulation de l'application web attendu.
- 5 minutes : Code Review + Questions Techniques
- 10 minutes : Mise en situation individuelle.



v

Livrables
- Répartition des tâches sur un Scrum Board avec tous les U.S + Lien de Repository Github du projet: 
- Conception du projet: Les diagrammes | UML, Date limite: 18/02/2025 avant midi
- Date de la dernière commit et le livrable final: 21/02/2025 avant 05:30 PM

Critères de performance
1. Implémentation des Bonnes Pratiques pour CRUD dans Laravel.

2. Règles de Validation des Formulaires en Laravel.

3. Utilisation de Middleware pour la Validation.

4. Implémentation des Seeders et Factories pour les Modèles.

5. Optimisation des Requêtes Eloquent.

6. Gestion Appropriée des Relations Eloquent.

7. Utilisation de Soft Deletes.

8. Cache des Requêtes Fréquemment Utilisées.

9. Tests de Performance.

10. Optimisation des Vues.
