 # Changelog CloudStrike
## 14-10-2024
### UserStories
#### UserStories based on what the functionalities are going to be and the "seriousness" of the UserStories

### User Stories:
| Als User wil ik | Zodat ik | Acceptatiecriteria | DOD | MoSCow |
|-----------------|----------|--------------------|-----|--------|
| Een foto kunnen plaatsen | Ik mijn cloudfoto kan delen met anderen | De foto is zichtbaar op de website met beschrijving en tags | Code en testen voltooid, foto zichtbaar | Must have |
| Een post kunnen maken | Ik mijn cloudfoto kan delen met beschrijving en tags | De post bevat een titel, beschrijving, foto, en tags | Code en testen voltooid, post zichtbaar | Must have |
| Tags kunnen toevoegen aan een post | Ik mijn foto kan categoriseren | Gebruikers kunnen tags toevoegen en posts filteren op basis van tags | Code en testen voltooid, tags werken correct | Must have |
| Een post kunnen bewerken | Ik mijn post kan aanpassen indien nodig | De gebruiker kan de titel, beschrijving, foto en tags aanpassen | Code en testen voltooid, wijzigingen zichtbaar | Should have |
| Posts van anderen kunnen liken | Ik waardering kan tonen voor een post | Liken-knop beschikbaar bij elke post en functioneel | Code en testen voltooid, likes worden bijgehouden | Should have |
| Op tags kunnen filteren | Ik snel posts kan vinden die mij interesseren | Filterfunctionaliteit beschikbaar en posts worden correct gefilterd | Code en testen voltooid, filtering werkt | Must have |
| Posts kunnen zoeken | Ik specifieke posts kan vinden | Zoekfunctie beschikbaar en zoekt in titels, beschrijvingen en tags | Code en testen voltooid, zoekresultaten werken | Should have |
| Posts van anderen kunnen bekijken | Ik de gedeelde cloudfoto's kan zien | De gebruiker kan posts van anderen bekijken in een overzicht | Code en testen voltooid, posts zichtbaar | Must have |

### Admin Stories:
| Als Admin wil ik | Zodat ik | Acceptatiecriteria | DOD | MoSCow |
|------------------|----------|--------------------|-----|--------|
| Alle posts in een dashboard kunnen zien | Ik overzicht heb van alle geplaatste content | Een dashboard toont alle posts met beheermogelijkheden | Code en testen voltooid, dashboard werkt | Must have |
| Posts van anderen kunnen verwijderen | Ik ongepaste of ongewenste content kan verwijderen | Admin kan posts verwijderen en gebruikers worden op de hoogte gebracht | Code en testen voltooid, verwijderen werkt | Must have |
| Posts van anderen kunnen bewerken | Ik fouten of aanpassingen kan maken indien nodig | Admin kan de titel, beschrijving, foto en tags van posts bewerken | Code en testen voltooid, bewerking werkt | Should have |


## ERD
### Eerste Versie
![erd](..\Images\erd.png)

## 15-10-2024
### Migrations

````
Added migrations
.Post migrations
````

## 16-10-2024
### Deep Validation and Rolls

````
Rolls:
Users.
-Full Crud in post table
-Like others post
-Login
-Register
-Deep Validation:
-If they post more than 4 times they have the rights to put one(1) post of them on the Homepage

Admin.
-Same permissions as the Users
-Have the right to edit and delete others Users Posts
````

## 16-10-2024
### Rest everything
Cleared files and are going to start from scratch

## 23-10-2024
Added Home and Post View, made the nav layout.
Added Migrations

````
-Implement the login fucntions
-Implement the register functions
-Fill the DATABASE
-Post DATABASE on home and post page
````

## 29-10-2024

