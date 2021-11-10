SELECT * FROM `étudiants` WHERE LEFT(prenom, 1) = 'T';
ou
SELECT * FROM `étudiants` WHERE prenom LIKE 'T%'