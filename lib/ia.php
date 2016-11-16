<?php
/**
 * Ejercicio hecho by Ximo Gil
 */
class ia
{

// Declaración de una propiedad

public $mapaCol=4;
public $mapaFil=4;
public $numNaves=3;
public $navesHumano=[];
public $navesIA=[];


// Declaración de un método
  //Getter
  public function getColumna(){
    return $this->mapaCol;
    }
  public function getFila(){
    return $this->mapaFil;
    }


    public function getNave(){
      return $this->numNaves;
    }

    public function getNaveHumano()
    {

      return $this->navesHumano;
    }
    public function getNavesIA(){
      //Variable para saber si podemos mover o no.
    $podemosMover=1;

    //foreach para recorrer el array navesIA.
      foreach ($this->navesIA as $key => &$nave) {
    //if para preguntar si es tipo1.
        if ($nave["tipo"]=="tipo1") {
    //foreach que recorre el array navesHumano
          foreach ($this->navesHumano as $key => $naveH){
    //if para comparar nave con naveH, si coincide la fila y columna, no podemos mover.
            if (($nave["fil"]-1) == $naveH["fil"] && $nave["col"] == $naveH["col"]) {
              $podemosMover=0;
        }

          }
    //if, en caso de que no coincidiera col y fil, que avanze una posición.
          if ($podemosMover==1) {
            $nave["fil"]=$nave["fil"]-1;
            }
        }

      }
      return $this->navesIA;
        }

  //Setter
  public function setMapaCol($mapaCol){

    if($mapaCol<0){
        $this->mapaCol=0;
    }
    elseif($mapaCol>3){
      $this->mapaCol=3;
    }else{
      $this->mapaCol=$mapaCol;
    }

  }

  public function setMapaFil($mapaFil){

    if($mapaFil<0){
        $this->mapaFil=0;
    }
    elseif($mapaFil>3){
      $this->mapaFil=3;
    }
    else{
      $this->mapaFil=$mapaFil;
    }
    }

  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      'id'=>$id,
      'tipo'=>$tipo,
      'col'=>$col,
      'fil'=>$fil,
    ];}

    public function setNaveIA($id,$tipo,$col,$fil){
      $this->navesIA[]=[
        'id'=>$id,
        'tipo'=>$tipo,
        'col'=>$col,
        'fil'=>$fil,
      ];}


public function randomPos(){
  $this->columna=rand(0,3);

  $this->fila=rand(0,3);

}

}
 ?>
