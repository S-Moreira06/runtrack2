-- SELECT MAX(capacite) 
-- FROM salles;

SELECT etage.nom as 'Biggest room', MAX(salles.capacite)
FROM etage
INNER JOIN salles ON etage.id = salles.id_etage;