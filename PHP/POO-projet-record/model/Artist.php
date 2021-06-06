<?php
class Artist extends ModelParent {

        public function __construct() {
        $this->table = 'artist';

        $this->getConnection();
    }
}