<?php
class Article {
    private $id;
    private $nom;
    private $prix;
    private $stock;

    public function __construct($id, $nom, $prix, $stock) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __isset($property) {
        return isset($this->$property);
    }

    public function __toString() {
        return "<tr><td>{$this->id}</td><td>{$this->nom}</td><td>{$this->prix}</td><td>{$this->stock}</td></tr>";
    }
}
?>