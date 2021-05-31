<?php

class employe {
    public $_nom;
    public $_prenom;
    public $_DateEmbauche;
    public $_function;
    public $_salaireAnn;
    public $_srvice;
    public $_date;


    public function __construct($_nom , $_prenom, $_DateEmbauche, $_function, $_salaireAnn, $_srvice) {
            $this->_nom = $_nom;
            $this->_prenom = $_prenom;
            $this->_DateEmbauche = $_DateEmbauche;
            $this->_function = $_function;
            $this->_salaireAnn = $_salaireAnn;
            $this->_srvice = $_srvice;
            $this->_date = new DateTime();
        }

            public function getNom() {
                return $this->_nom;
            }
            public function getPrenom() {
                return $this->_prenom;
            }
            public function getDateEmbauche() {
                return $this->_DateEmbauche;
            }
            public function getFunction() {
                return $this->_function;
            }
            public function getSalaireAnn() {
                return $this-> _salaireAnn;
            }
            public function getService() {
                return $this->_service;
            }
                public function dateJour() {
                    $anne = $this->_DateEmbauche->diff($this->_date); //calcule pour différence les deux dates
                    return $anne;
                }


            public function salaireAnnuel() {
                return $this->getSalaireAnn() * 0.05; // l’employé reçoit une prime calculée sur le salaire annuel (5% du brut) 
            } 

            public function salaireAnciennete() {
                return ($this->getSalaireAnn() * 0.02) * $this->dateJour(); //l’ancienneté (2% du brut pour chaque année d’ancienneté)
            }

            public function prime() {
                return $this->salaireAnnuel()  + $this->salaireAnciennete(); // la méthode permette de déduire le montant de cette prime 
            }

            public function versement() {
                $today = date("2021-11-30"); //e prime est versée au 30/11
                $versementDate = date("2021-11-30");
                if ($today == $versementDate) {
                    echo '';
                }else{
                    echo '';
                }
            }



                public function affich() {
                    echo 'Nom :' . $this->getNom() . '<br>' ;
                    echo 'Prenom :' . $this->getPrenom() . '<br>' ; 
                    echo 'DateEmbauche :' . $this->getDateEmbauche() . '<br>' ;
                    echo 'Function :' . $this->getFunction() . '<br>' ;
                    echo 'SalaireAnn :' . $this->getSalaireAnn() . '<br>' ;
                    echo 'Service :' . $this->getService() . '<br>' ;
                    echo 'Prime salaire annuel :' . $this->salaireAnnuel() . '<br>' ;
                    echo 'Prime salaire ancienneté :' . $this->anneAnciennete() . '<br>' ;
                    echo 'Prime : ' . $this->prime() . '<br>' ;
                    echo ' Le jour du versement' . $this->versement() . '<br>' ;
                }



}

 $em = new employe("dffds" , "gfdggfd", "2021-11-30", "fdsfds", "2424242", "dfdsfdsf");
 $em->getNom();
 $em->getPrenom();
 $em->getDateEmbauche();
 $em->getFunction();
 $em->getSalaireAnn();
 $em->getService();
 $em-> dateJour();
 $em-> salaireAnnuel();
 $em->anneAnciennete();
 $em->prime();
 $em->versement();
