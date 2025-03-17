# Gestion de Comptes Bancaires en PHP

Ce projet implémente une gestion simple de comptes bancaires en PHP en utilisant la programmation orientée objet (POO). Il comprend deux classes principales : **CompteBancaire** et **Titulaire**, ainsi qu'un fichier `index.php` pour les tests.

## Structure du projet

- **Classe `CompteBancaire`** : Classe représentant un compte bancaire (solde, devise, titulaire, opérations).
- **Classe `Titulaire`** : Classe représentant un titulaire avec un tableau de ses comptes et une méthode pour calculer son âge.
- **Fichier `index.php`** : Fichier principal pour instancier et tester les classes.

## Classes

### Titulaire

- **Propriétés** :
  - `$_nom` : Le nom du titulaire.
  - `$_prenom` : Le nom du titulaire.
  - `$_dateDeNaissance` : La date de naissance.
  - `$_ville` : La ville du titulaire.
  - `$_comptes` : Tableau des comptes associés.
  
- **Méthode** :
  - `calculerAge()` : Calcule l'âge du titulaire à partir de sa date de naissance.

### CompteBancaire

- **Propriétés** :
  - `$_libelle` : Nom du compte.
  - `$_soldeInitial` : Solde du compte.
  - `$_devise` : Devise du compte.
  - `$_titulaire` : Titulaire du compte.
  
- **Méthodes** :
  - `crediter($montant)` : Ajoute un montant au solde.
  - `debiter($montant)` : Retire un montant du solde.
  - `virement($montant, CompteBancaire $compte)` : Effectue un virement vers un autre compte.
 
## Fonctionnalités

1. **Ajout d'un compte à un titulaire** : Lorsqu'un compte est créé, il est automatiquement ajouté à la liste des compte du titulaire associé.
2. **Gestion des comptes d'un titulaire** : Chaque titulaire peut avoir un ou plusieurs comptes associés.

### Exemple d'utilisation

```php
// Inclusion des fichiers
include 'CompteBancaire.php';
include 'Titulaire.php';

// Création d'un titulaire et de comptes
$titulaire = new Titulaire("Veltz", "Ivan", "1991-07-26", "Mulhouse");
$compte1 = new CompteBancaire('Compte courant', 100, 'EUR', $titulaire);
$compte2 = new CompteBancaire('Livret A', 400, 'EUR', $titulaire);

// Ajout des comptes au titulaire
array_push($titulaire->comptes, $compte1, $compte2);

// Calcul de l'âge et virement
echo $titulaire->calculerAge() . ' ans<br>';
$compte1->virement(200, $compte2);
```

## Installation

**Clonez ou téléchargez ce repository** sur votre machine :
   
   - git clone https://github.com/IvanVeltz/ExoBanque.git

## Auteur

- **Nom** : VELTZ Ivan
