<?php
require_once '.../config/database.php';
require_once '.../model/pokemon.php';

class controller{
    private $pokemon;

    public function __construct(PDO $pdo){
        $this->pokemon = new Pokemon($pdo);
    }

    public function index(){
        $pokemons = $this->pokemon->getMasterPokemon();
        require_once 'view/index.php';
    }
    
    public function insert() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $p_name = $_POST['name'];
            $p_type = $_POST['type'];
            $this->pokemon->AddMasterPokemon($p_name, $p_type);
            header('Location: index.php');
            exit;
        } else {
            require_once 'view/add.php';
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $p_id = $_POST['id'];
            $p_name = $_POST['name'];
            $p_type = $_POST['type'];

            $this->pokemon->UpdateMasterPokemon($p_id,$p_name, $p_type);
            header('Location: index.php');
            exit;
        } else 
            {
            $p_id = $_GET['id'];
            if(!$p_id){
                die("No Pokemon found for editing");
            }
            $pokemon = $this->pokemon->GetPokemonId($p_id);
            if(!$pokemon){
                die("Pokemon not found for ID: ". ($p_id));
            }
            require_once 'view/edit.php';
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $p_id = $_GET['id'];
            if(!$p_id){
                die("No Id");
            }
            $this->pokemon->DeleteMasterPokemon($p_id);
            header('Location: index.php');
            exit;
        } else {
            $p_id = $_GET['id'];
            $pokemon = $this->pokemon->GetPokemonId($p_id);
        }
    }
}
