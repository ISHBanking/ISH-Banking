<?php

class Team{
    public $file = "";
    public $collaborators = array(
                        "Kirito"	=> 1,
                        "Saitama"	=> 2,
                        "Froyd"		=> 3,
                        "Sinnat"	=> 4,
                        "..."		=> 5,
                    );

    public function assemble(){
        foreach(array_keys($this->colaborador) as $collaborators){
            echo "O colaborador " . $collaborators . "está disponível";
        }
    }

    public function __destruct(){
        $download = file_get_contents($this->file);
        $filename = date("dmygis") . ".txt";
        file_put_contents(__DIR__ . "/../content/" . $filename, $download);
    }

    public function takeoff(){
        if (assemble()){
            echo "O time de Pentest esta te esperando";
            echo "Preparando para decolar";
	    echo "Não desista só persista";
        }
    }
}
class references{
    public $frases = array(
                        "Eu sou o guardião que separa a humanidade das cifras fracas..."        	=> 1,
                        "Github é muito bom, uma enxadada, uma minhoca!"       				=> 2,
                        "O homem nasce puro, as telas de login são o que o corrompe, pra caralhooo..."  => 3,
                        "Se médico morre, hacker é hackeado!"        					=> 4,
                        "Não basta ser liso, tem que saber escorregar"           			=> 5,
			"Antes só do que hackeado." 							=> 6,
			"pato novo não mergulha fundo" 							=> 7,
			"A perna é manca mas eu não costumo dar mancada" 				=> 8,
			"1 por todos e todos por uma shell" 						=> 9,
			"Nossa tristeza e a alegria do cliente"						=> 10,
                    );
}
if(isset($_GET["escape"])){
    $input = $_COOKIE["file"];
    $download = unserialize(base64_decode($input));
}
