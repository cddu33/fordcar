# Changelog plugin FordCar

>**IMPORTANT**
>
>S'il n'y a pas d'information sur la mise à jour, c'est que celle-ci concerne uniquement de la mise à jour de documentation, de traduction ou de texte.

>
>Toutes les informations remontants de l'API sont disponible dans le fichier Data/vin.json du plugin.

>
>Toutes les informations interprétées par le plugin sont disponible dans les log en mode debug.

# 25/05/2023

Ajout pour les voiture électrique et hybride de l'information: Heure de fin de la charge

# 22/05/2023

Suppression Firmware Upgrade car ne remonte pas

Correction widget 4.4

# 27/11/2022
Correction prise en compte Veille Profonde

Rajout garde-fou pour ne pas supprimer les données lors de la veille profonde

Correction prise en compte Firmawre upgrade

# 22/10/2022
correction bug python dépendance pkce

Compatibilité Jeedom 4.4

Compatibilité Jeedom 4.0

# 18/10/2022

Passage en stable

# 11/09/2022 (beta)

suppression cron daily non fonctionnel pour le moment

Suppression de la commande signal non fonctionnelle

# 10/09/2022 (beta)

Ajout d'un forçage du raffraichissement 1 fois par jour

Amélioration de la documentation

Amélioration du code

Rajout commande signal (non testé)

# 07/09/2022

Reprise des versions beta des 4, 6 et 7 septembre 2022


# 07/09/2022 (beta)
Simplification du script python

Les messages d'erreur doivent être plus explicite

Correction autonomie

# 06/09/2022 (beta)
Modification des dépendances: 
- intégration du script python
- utilisation du nouveau système de Jeedom

# 04/09/2022 (beta)

Rajout informations hybride et electrique:
- véhicule branché
- type de charge

Dépandance V4 package

# 31/08/2022 Stable
Reprise des version beta 26 25 24 aout


# 26/08/2022 (beta)

Corrections pressions unité

Correction refresh widget

Correction type véhicule

# 25/08/2022 (beta)

Corrections porte arrière droite

Corrections widget en mode hybride


# 24/08/2022 (beta)

Corrections pressions inversées

Corrections gestion de l'état des fênetres

Support des informations pour les hybrides

# 20/08/2022

Corrections messages json

Adaptation dépendance pour les smart

Reprise des informations elec/therm

# 12/08/2022

Passage en stable des fonctionnalités des  3 5 et 6 aout

Correction des infos électriques

# 06/08/2022 (beta)

Rajout d'information pour les voitures électrique

Reprise version mobile

# 05/08/2022 (beta)

Bouton pour forcer l'actualisation (30s mini avantle retour d'info)

# 03/08/2022 (beta)

Cron pour l'actualisation des information modifiable depuis l'équipement, de base 15min

# 02/08/2022

Actualisation automatique des commandes après une mise à jour

# 31/07/2022

Reprise de la taille du widget bureau

Rajout des infos: capot coffre et coffre interieur

Rajout des commandes démarrer et couper le moteur (fonctionne suivant les pays)

# 24/07/2022

Amélioration du widget bureau

Widget mobile



# 14/07/2022

Création Widget avec source mybmw

Partie thermique opérationnelle avec lien vers la position


# 10/07/2022
Statut de la voiture//Veille//Maj

Kilométrage//Latitude//Longitude

Etat batterie//Tension batterie

Etat huile//% huile

Pneux

Vitres//Portes//Coffre

Fuel


# 09/07/2022
Initial

Envoie des commandes lock/unlock

