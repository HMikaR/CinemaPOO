<?php 

class Genre {

    private string $_NomGenre;

    public function __construct( string $_NomGenre)
    {
        $this-> _NomGenre;
    } 

    //GETTER 

    public function get_NomGenre ()
    {
        $this -> _NomGenre;
    }

    //SETTER

    public function set_NomGenre ($_NomGenre)
    {
        return $this -> _NomGenre=$_NomGenre;
    }
}
