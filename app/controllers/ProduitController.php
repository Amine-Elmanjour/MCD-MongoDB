<?php

class ProduitController {
    private $model;

    public function __construct() {
        $this->model = new ProduitModel();
    }

    
    public function index() {
        $produits = $this->model->findAll();
        require __DIR__ . '/../views/produit/index.php';
    }

    public function create() {
        require __DIR__ . '/../views/produit/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nom' => $_POST['nom'] ?? '',
                'quantite' => $_POST['quantite'] ?? 0,
                'prix' => $_POST['prix'] ?? 0,
            ];
            $this->model->insert($data);
            header('Location: index.php');
            exit;
        }
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: index.php');
            exit;
        }
        $produit = $this->model->findById($id);
        require __DIR__ . '/../views/produit/edit.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            if (!$id) {
                header('Location: index.php');
                exit;
            }
            $data = [
                'nom' => $_POST['nom'] ?? '',
                'quantite' => $_POST['quantite'] ?? 0,
                'prix' => $_POST['prix'] ?? 0,
            ];
            $this->model->update($id, $data);
            header('Location: index.php');
            exit;
        }
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->delete($id);
        }
        header('Location: index.php');
        exit;
    }
}
