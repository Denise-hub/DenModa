<?php
    class Product {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function getProduct() {
            $this->db->query("SELECT * FROM products");
            $result = $this->db->resultSet();

            return $result;
        }
    }
?>