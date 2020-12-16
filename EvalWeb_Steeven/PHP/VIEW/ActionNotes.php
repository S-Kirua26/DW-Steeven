<?php

$mode = $_GET['mode'];

$obj = new Notes($_POST);

switch ($mode) {
    case "ajouter":
        {
            NotesManager::add($obj);
            break;
        }
    case "modifier":
        {

            NotesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=NotesManager::findById($idRecherche);
            NotesManager::delete($id);
            break;
        }
}