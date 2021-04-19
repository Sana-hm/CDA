--insert 
DELIMITER |
CREATE TRIGGER maj_total AFTER INSERT ON lignedecommande
    FOR EACH ROW
    BEGIN
        DECLARE id_c INT;
        DECLARE tot DOUBLE;
        DECLARE remi DOUBLE;
        SET id_c = NEW.id_commande; -- nous captons le numéro de commande concerné
        SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcul le total
        SET remi = (select remise from commande WHERE id=id_c);
        UPDATE commande SET total=tot-remi WHERE id=id_c; -- on stocke le total dans la table commande
END |
DELIMITER ;


--update
DELIMITER |
CREATE TRIGGER after_update_total AFTER UPDATE ON lignedecommande
    FOR EACH ROW
    BEGIN
        DECLARE id_c INT;
        DECLARE tot DOUBLE;
        DECLARE remi DOUBLE;
        SET id_c = NEW.id_commande; -- nous captons le numéro de commande concerné
        SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcul le total
        SET remi = (SELECT remis FROM commande WHERE id=id_c);
        UPDATE commande SET total=tot WHERE id=id_c; -- on stocke le total dans la table commande
END |
DELIMITER ;


--delete 
DELIMITER |
CREATE TRIGGER after_delete_total AFTER DELETE  ON lignedecommande
    FOR EACH ROW
    BEGIN
        DECLARE id_c INT;
        DECLARE tot DOUBLE;
        DECLARE remi DOUBLE;
        SET id_c = OLD.id_commande; -- nous captons le numéro de commande concerné
        SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcul le total
        SET remi =(SELECT remis FROM commande WHERE id=id_c);
        UPDATE commande SET total=tot WHERE id=id_c; -- on stocke le total dans la table commande
END |
DELIMITER ;


--exercices hotel

--1. modif_reservation : interdire la modification des réservations (on autorise l'ajout et la suppression).

CREATE TRIGGER modif_reservation BEFORE UPDATE 
ON reservation FOR EACH ROW
SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Something went wrong. Management rules reservations !';


--2. insert_reservation : interdire l'ajout de réservation pour les hôtels possédant déjà 10 réservations.
DELIMITER |
CREATE TRIGGER insert_reservation AFTER INSERT
ON reservation FOR EACH ROW
    BEGIN
         DECLARE numb_res INT;
         DECLARE id_res INT;
         DECLARE nom_hot INT;
         SET id_res=NEW.res_id;
         SET nom_hot=(SELECT hot_nom FROM vu_5 WHERE res_id=id_res);
         SET numb_res=(SELECT count(*) FROM vu_5 WHERE hot_nom=nom_hot);
             IF numb_res>10 then 
                     SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Something went wrong. Management rules reservations !';

    END IF;
END |
DELIMITER ;

--3. insert_reservation2 : interdire les réservations si le client possède déjà 3 réservations.

DELIMITER |
CREATE TRIGGER insert_reservation2 AFTER INSERT
ON reservation for EACH ROW
    BEGIN
        DECLARE id_cli INT;
        DECLARE numb_res_cli INT;
        SET id_cli=NEW.res_cli_id;
        SET numb_res_cli= (SELECT COUNT(*) FROM reservation
         WHERE res_cli_id=id_cli);
            IF numb_res_cli>3 then
                SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Something went wrong. Management rules reservations !';

      END IF ;
    END |
DELIMITER ;

--4. insert_chambre : lors d'une insertion, on calcule le total des capacités des chambres pour l'hôtel, si ce total est supérieur à 50, on interdit l'insertion de la chambre.

DELIMITER |
CREATE TRIGGER insert_chambre AFTER INSERT
ON chambre FOR EACH ROW
BEGIN
    DECLARE cap_hot INT;
    DECLARE id_hot INT; 
    SET id_hot=NEW.cha_hot_id;
    SET cap_hot= (SELECT SUM(cha_capacite) FROM chambre WHERE cha_hot_id=id_hot );
        IF cap_hot>50 
            then 
                 SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Something went wrong. Management rules chambre !';
END IF;
END |
DELIMITER ; 


