CREATE USER 'util1'@'%' IDENTIFIED BY 'Michelou';
GRANT ALL PRIVILEGES ON exercice3.* TO 'util1'@'%'  
IDENTIFIED BY 'Michelou';

CREATE USER 'util2'@'%' IDENTIFIED BY 'ScolPascal';
GRANT SELECT ON exercice3.* TO 'util2'@'%' 
IDENTIFIED BY 'ScolPascal';

CREATE USER 'util3'@'%' IDENTIFIED BY 'Ontattend';
GRANT SELECT ON exercice3.enseignants TO 'util3'@'%' 
IDENTIFIED BY 'Ontattend';



