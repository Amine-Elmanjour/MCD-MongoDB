<?php
// app/models/ProduitModel.php

use MongoDB\BSON\ObjectId;

class ProduitModel
{
    private $collection;

    public function __construct()
    {
        $db = Mongo::connect();
        $this->collection = $db->selectCollection('produits');
    }

    public function findAll()
    {
        $cursor = $this->collection->find();
        $produits = [];
        foreach ($cursor as $doc) {
            $doc['_id'] = (string) $doc['_id'];
            $produits[] = $doc;
        }
        return $produits;
    }

    public function findById($id)
    {
        return $this->collection->findOne(['_id' => new ObjectId($id)]);
    }

    public function insert($data)
    {
        $result = $this->collection->insertOne($data);
        return $result->getInsertedId();
    }

    public function update($id, $data)
    {
        $this->collection->updateOne(
            ['_id' => new ObjectId($id)],
            ['$set' => $data]
        );
    }

    public function delete($id)
    {
        $this->collection->deleteOne(['_id' => new ObjectId($id)]);
    }
}
