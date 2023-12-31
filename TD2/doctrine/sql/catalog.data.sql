-- Adminer 4.8.1 PostgreSQL 13.1 (Debian 13.1-1.pgdg100+1) dump

INSERT INTO "categorie" ("id", "libelle") VALUES
(5,	'Pizzas'),
(6,	'Boissons'),
(7,	'Salades'),
(8,	'Desserts');

INSERT INTO "produit" ("id", "numero", "libelle", "description", "image", "categorie_id") VALUES
(2,	1,	'Margherita',	'Tomate, mozzarella, basilic',	'https://www.dominos.fr/ManagedAssets/FR/product/PZSO.png',	5),
(3,	2,	'Reine',	'Tomate, mozzarella, jambon, champignons',	'https://www.dominos.fr/ManagedAssets/FR/product/PZRE.png',	5),
(4,	3,	'Savoyarde',	'Tomate, mozzarella, jambon, reblochon, pommes de terre, oignons',	'https://www.dominos.fr/ManagedAssets/FR/product/PZSA.png',	5),
(5,	4,	'Pepperoni',	'Tomate, mozzarella, pepperoni',	'https://www.dominos.fr/ManagedAssets/FR/product/PZPE.png',	5),
(6,	5,	'cola',	'Cola-Calo',	'https://www.dominos.fr/ManagedAssets/FR/product/BOCO.png',	6),
(7,	6,	'eau',	'eau',	'https://www.dominos.fr/ManagedAssets/FR/product/BOEA.png',	6),
(8,	7,	'salade verte',	'salade verte',	'https://www.dominos.fr/ManagedAssets/FR/product/SASA.png',	7),
(9,	8,	'salade tomate',	'salade tomate',	'https://www.dominos.fr/ManagedAssets/FR/product/SATO.png',	7),
(10,	9,	'tiramisu',	'tiramisu',	'https://www.dominos.fr/ManagedAssets/FR/product/DETI.png',	8),
(11,	10,	'panna cotta',	'panna cotta',	'https://www.dominos.fr/ManagedAssets/FR/product/DEPA.png',	8);

INSERT INTO "taille" ("id", "libelle") VALUES
(1,	'normale'),
(2,	'grande');

INSERT INTO "tarif" ("produit_id", "taille_id", "tarif", "id") VALUES
(2,	1,	8.99,	1),
(2,	2,	11.99,	2),
(3,	1,	9.99,	3),
(3,	2,	12.99,	4),
(4,	1,	10.99,	5),
(4,	2,	13.99,	6),
(5,	1,	9.99,	7),
(5,	2,	12.99,	8),
(6,	1,	2.99,	9),
(6,	2,	3.99,	10),
(7,	1,	1.99,	11),
(7,	2,	2.99,	12),
(8,	1,	3.99,	13),
(8,	2,	4.99,	14),
(9,	1,	4.99,	15),
(9,	2,	5.99,	16),
(10,	1,	3.99,	17),
(10,	2,	4.99,	18),
(11,	1,	4.99,	19),
(11,	2,	5.99,	20);

-- 2023-10-30 08:35:44.439611+00
