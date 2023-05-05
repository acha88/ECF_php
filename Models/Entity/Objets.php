<?php

class Contact
{
    private int $idObj;

    private String $nomObj;

    private String $descriptionObj;

    private Boolean $disponibiliteObj;

    private int $idCat;

    private int $idUti;


    /* public function __construct(String $nom)
    {
        $this->nom = $nom;
    }*/

    // les getteurs
    public function getIdObj(): int
    {
        return $this->idObj;
    }

    public function getNomObj(): String
    {
        return $this->nomObj;
    }

    public function getDesciptionObj(): String
    {
        return $this->descriptionObj;
    }

    public function getDisponibiliteObj(): Boolean
    {
        return $this->disponibilteObj;
    }

    // les setteurs
    public function setNomObj($nomObj)
    {
        $this->nomObj = $nomObj;
    }

    public function setDescriptionObj($descriptionObj)
    {
        $this->descriptionObj = $descriptionObj;
    }
    public function setDisponibiliteObj($disponibiliteObj)
    {
        $this->disponibiliteObj = $disponibiliteObj;
    }

}
