<?php


namespace App\Models;


class AssociationTools
{


//    private $databaseTools;
//    private $categorieTools;
//
//    public function __construct($databaseTools)
//    {
//        $this->databaseTools = $databaseTools;
//        $this->categorieTools = new CategorieTools($databaseTools);
//    }
//
////    public function addNewPlante($plante)
////    {
////        $params = [
////            ["pla_name" => $plante->getName()],
////            ["pla_prix" => $plante->getPrix()],
////            ["pla_cat_id"=> $plante->getCategorie()]];
////
////        $this->databaseTools->insertQuery("INSERT INTO plante (pla_name,pla_prix,pla_cat_id) VALUES (:pla_name,:pla_prix,:pla_cat_id)", $params);
////    }
//
//    public function addNewPlante($plante){
//            $params = [
//                ["paramKey" => ':pla_name', "paramValue" => $plante->getName()],
//                ["paramKey" => ':pla_prix', "paramValue" => $plante->getPrix()],
//                ["paramKey" => ':pla_cat_id', "paramValue" => $plante->getCategorie()->getId()]
//            ];
//            $this->databaseTools->insertQuery("INSERT INTO plante (pla_name,pla_prix,pla_cat_id) VALUES (:pla_name,:pla_prix,:pla_cat_id)", $params);
//    }
//
//
//    function hydratePlante($plante, $datas)
//    {
//        $plante->setId($datas['pla_id']);
//        $plante->setName($datas['pla_name']);
//        $plante->setPrix($datas['pla_prix']);
//        return $plante;
//    }
//
//    public function getAllPlantes()
//    {
//        $results = $this->databaseTools->executeQuery('SELECT * FROM plante INNER JOIN categorie ON plante.pla_cat_id = categorie.cat_id');
//        $plantes = [];
//        foreach ($results as $result) {
//            $plante = new Plante();
//            $plante = $this->hydratePlante($plante, $result);
//            $categorie = new Categorie();
//            $categorie = $this->categorieTools->hydrateCategorie($categorie, $result);
//            $plante->setCategorie($categorie);
//            array_push($plantes, $plante);
//        }
//        return $plantes;
//    }
//
//    public function getAllPlanteByCategorieId($categorieId)
//    {
//        $results = $this->databaseTools->executeQuery("SELECT * FROM plante WHERE pla_cat_id = $categorieId");
//        $plantes = [];
//        foreach ($results as $result) {
//            $plante = new plante();
//            $plante = $this->hydratePlante($plante, $result);
//            $plante->setCategorie($result['pla_cat_id']);
//            array_push($plantes, $plante);
//        }
//        return $plantes;
//    }
//
//    public function getPlanteByName($name)
//    {
//        $result = $this->databaseTools->selectByNameInTable('plante', $name);
//        $plante = new plante();
//        $plante = $this->hydratePlante($plante, $result);
//        return $plante;
//    }
//
//    public function selectByCategorieName()
//    {
//        $results = $this->databaseTools->executeQuery("SELECT * FROM plante INNER JOIN categorie ON  cat_id = pla_cat_id
//        WHERE cat_name LIKE '%".$_POST['parCategorie']."%'");
//
//        $plantes = [];
//        foreach ($results as $result) {
//            $plante = new Plante();
//            $plante = $this->hydratePlante($plante, $result);
//
//            $categorie = new Categorie();
//            $categorie = $this->categorieTools->hydrateCategorie($categorie, $result);
//
//            $plante->setCategorie($categorie);
//
//            array_push($plantes, $plante);
//        }
//        return $plantes;
//    }
//
//}
//
//

}

