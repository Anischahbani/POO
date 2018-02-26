<?php
/*'Quelle est la différence entre une classe et un objet ?'
Une classe est une description comportant un ensemble de caractéristiques et de fonctionnalités dont chaque objet créé à partir de ce modèle héritera

'Quelle visiblité est la moins permissive ?'
private

'Quelle garantie nous apporte le principe d’encapsulation ?'
Il nous garantit la validité des types et des valeurs des données de nos objets


'Quel paramètre implicite est passé à chaque méthode pour représenter l’objet que l’on est en train de manipuler ?'
$this

'Quel mot­-clé permet de créer une nouvelle instance ?'
new

'Quelle est l’utilité de la pile d’autoloads ?'
Cela sert à déclarer un ensemble de fonctions appelées successivement par PHP pour tenter de charger une classe

'Si l’on respecte le principe d’encapsulation, comment procédons­-nous pour accéder et modifier la valeur des attributs de nos objets ?'
Nous nous servons d’accesseurs et de mutateurs

'Quelle est l’utilité d’un constructeur ?'
Effectuer des opérations d’initialisation dès la création de l’objet

'Quelle est l’utilité de l’opérateur de résolution de portée ?'
Accéder à un élément appartenant à la classe et non à l’objet

'Dans quel cas doit­-on déclarer un élément statique ?'
Lorsque l’élément est propre à la classe et non aux objets

'Quel mot­-clé permet, depuis les méthodes d’une classe, d’accéder à ladite classe ?'
self

'Si je souhaite manipuler des articles stockés en base de données, quelles classes vais­-je devoir créer pour manipuler ces articles ?'
Une classe dont chaque instance représentera un article ainsi qu’une classe chargée de gérer ces instances en base de données

'Que signifie « hydrater un objet » ?'
Fournir des données à un objet initialement vide afin qu’il puisse les affecter à ses attributs

'Quel est le principe de l’héritage ?'
Créer une classe possédant au moins toutes les caractéristiques et fonctionnalités d’une autre classe

'Quelle condition nécessaire et suffisante doit-­on avoir pour dire qu’une classe B doit hériter d’une classe A ?'
On doit pouvoir dire : « B est un A »

'Quel mot­-clé permet de procéder à un héritage ?'
extends

'En quoi consiste la redéfinition d’une méthode ?'
Réécrire une méthode déjà implémentée dans la classe mère

'Quel mot­-clé permet, au sein d’une méthode, d’accéder à la classe parente ?'
parent

'Dans quel cas décide­-t-­on de déclarer une classe abstraite ?'
Lorsque l’on souhaite représenter une nature en commun pour plusieurs classes

'À quoi sert la résolution statique à la volée ?'
Cela sert à déterminer la classe active durant l’exécution, et non la classe dans laquelle se situe la méthode invoquée

'Qu’est­-ce qu’une méthode magique ?'
Il s’agit d’une méthode invoquée automatiquement par PHP suite à un événement spécifique qui vient de se produire

'Le nom de chaque méthode magique suit une convention bien précise, laquelle ?'
Leurs noms sont précédés de deux tirets bas*/