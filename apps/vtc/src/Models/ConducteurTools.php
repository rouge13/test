<?php


namespace App\Models;


class ConducteurTools
{
    private $databaseTools;
    private $conducteurTools;

    public function __construct($databaseTools)
    {
        $this->databaseTools = $databaseTools;
        $this->conducteurTools = new conducteurTools($databaseTools);
    }

    public function hydrateConducteur($conducteur, $datas)
    {
        $conducteur->setId($datas['con_id']);
        $conducteur->setName($datas['con_prenom']);
        $conducteur->setName($datas['con_nom']);


        return $conducteur;
    }

    //getCategoryById : return un objet Categorie complet

    public function getAllConducteurs()
    {
        $results = $this->databaseTools->executeQuery('SELECT * FROM conducteur');
        $conducteurs = [];
        foreach ($results as $result) {
            $conducteur = new Conducteur();
            $conducteur = $this->hydrateConducteur($conducteur, $result);
            array_push($conducteurs, $conducteur);
        }
        return $conducteurs;

    }


    //    public function getByCategorieId($categorie)
//    {
//        $result = $this->databaseTools->executeQuery("SELECT * FROM categorie WHERE cat_id = $categorie");
//
//        $categorie = new Categorie();
//        $categorie = $this->hydrateCategorie($categorie, $result);
//        $categorie->setCategorie($result['cat_id']);
//
//        return $categorie;
//    }
}