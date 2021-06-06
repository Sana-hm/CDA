<?php
abstract class ModelParent {

    private string $host = 'localhost' ; 
    private string $user = 'root' ;
    private string $password = 'root' ; 
    private string $dbname = 'record';

    protected $_con;

    public string $table ;
    public string $id;

        //connection data
        public function getConnection() {
        
            $this->_con = null;

             try {
                    $this->_con = new PDO ("mysql:host=$this->host;dbname=$this->dbname;charset=utf8" , $this->user, $this->password);
        
             }catch(PDOException $exeption) {

                 echo ' Erreur :' . $exeption->getMessage();
                }
        }

        //read data
        public function getAll() {
            
                $query = 'SELECT * FROM ' . $this->table;
                $result = $this->_con->prepare($query);
                $result->execute();

                $discs = $result->fetchAll(PDO::FETCH_OBJ);
                return $discs;
            }
            public function getOneById($id) {
                $query = 'SELECT * FROM' . $this->table . 'WHERE id = :id';
                $result = $this->_con->prepare($query);
                $result->bindparam(':id' , $id);
                $result->execute();

            }
    }
        
