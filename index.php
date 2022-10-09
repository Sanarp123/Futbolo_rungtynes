<!-- Sukurti klasę "FutboloRungtynes".
Klasės parametrai:  $patirtaTrauma, $kuriKomandaLaimejo, $rungtyniuRezultatas


Po klasės sukūrimo, sukurti objektą ir paleisti visus metodus. -->

<?php

class FutboloRungtynes {
    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;

//simuliuotiTraumas() - pasitelkiant rand() funkcija ir generuojant skaičius nuo 1 iki 1000, grąžinti tokią informaciją - jei sugeneruotas skaičius dalinasi iš 3,5 ir 10 - $patirtaTrauma = 2, kitais atvejais - $patirtaTrauma = 0.
public function simuliuotiTraumas(){
            $Trauma = rand(1,1000); 
            if($Trauma%3==0 && $Trauma%5==0 && $Trauma%10==0){
                $this->patirtaTrauma = "2";
            }
            else{ 
                $this->patirtaTrauma = "0";
            }
}
//simuliuotiRungtynes() - pasitelkian rand() funkciją, grąžinti masyvą su dvejais skaičiais pvz.: [0,2], kur pirmas skaičius yra pirmos komandos komandos įvarčių kiekis, o antras - antros komandos įvarčių kiekis.
public function simuliuotiRungtynes() {
    $this->rungtyniuRezultatas = array(
        $team1  = rand(0,7),
        $team2  = rand(0,7)
    );
}

//laimetojai() - priskiria argumentui $kuriKomandaLaimejo reikšmes: jei pirma komanda laimėjo - $kuriKomandaLaimejo = 1, kitu atveju $kuriKomandaLaimejo = 2
public function laimetojai(){
        if(($this->rungtyniuRezultatas[0])>($this->rungtyniuRezultatas[1])){
            $this->kuriKomandaLaimejo = "Laimejo 1 komanda";
        }
        if(($this->rungtyniuRezultatas[0])<($this->rungtyniuRezultatas[1])){
            $this->kuriKomandaLaimejo = "Laimejo 2 komanda";
        }
        if(($this->rungtyniuRezultatas[0])==($this->rungtyniuRezultatas[1])){
            $this->kuriKomandaLaimejo = "Lygiosios";
        }
       
}
}
//Po klasės sukūrimo, sukurti objektą ir paleisti visus metodus. -->
$rungtynes = new FutboloRungtynes();
echo $rungtynes->simuliuotiTraumas();
echo $rungtynes->simuliuotiRungtynes();
echo $rungtynes->laimetojai();
       var_dump($rungtynes)


?>