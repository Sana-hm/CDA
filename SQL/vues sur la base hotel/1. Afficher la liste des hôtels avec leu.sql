--1. Afficher la liste des hôtels avec leur station
CREATE VIEW vu_1
AS 
SELECT hot_nom,sta_nom FROM hotel,station
WHERE sta_id=hot_sta_id;


--aficher 
SELECT * FROM vu_1

--2. Afficher la liste des chambres et leur hôtel
CREATE VIEW vu_2
AS
SELECT cha_numero,hot_nom FROM chambre,hotel
WHERE cha_hot_id=hot_id

--aficher 
SELECT * FROM vu_2

--3. Afficher la liste des réservations avec le nom des clients
CREATE VIEW vu_3
AS
SELECT res_id,res_date,cli_nom FROM reservation,client
WHERE res_cli_id=cli_id

--aficher 
SELECT * FROM vu_3

--4. fficher la liste des chambres avec le nom de l’hôtel et le nom de la station
CREATE VIEW vu_4
AS
SELECT cha_numero,hot_nom,sta_nom FROM chambre,hotel,station
WHERE cha_hot_id=hot_id AND sta_id=hot_sta_id

--aficher 
SELECT * FROM vu_4

--5. Afficher les réservations avec le nom du client et le nom de l’hôtel
CREATE VIEW vu_5
AS
SELECT cli_nom,res_id,res_date,hot_nom FROM client,reservation,hotel,chambre
WHERE cli_id=res_cli_id
AND res_cha_id=cha_id AND cha_hot_id=hot_id

--aficher 
SELECT * FROM vu_5