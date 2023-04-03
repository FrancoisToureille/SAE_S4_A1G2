<?php
namespace control;
class Presenter
{
    public function __construct()
    {
    }

    public function getAllGagnantHTML(){

        if(recupGagnant() == 0){
            AjouteGagnant("test",0,"programmation");
        }

        $content = '';
        $listGagnant = recupGagnant();
        $nbGagnant = sizeof($listGagnant)/3;

        $x = 0;
        $pos = 1;
        while($nbGagnant > $x/3) {
            $content .= '<tr> <td>' . $pos;
            $pos += 1;
            $content .= '</td> <td>' . $listGagnant[$x];
            $x += 1;
            $content .= '</td> <td>' . $listGagnant[$x];
            $x = $x + 1;
            $content .= '</td> <td>' . $listGagnant[$x];
            $x = $x + 1;
            $content .= '</td> </tr>';
        }
        return $content;
    }
}
