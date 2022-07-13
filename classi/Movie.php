<?php

class Movie
{
  public $titolo;
  public $regista;
  public $paesePruduzione;
  public $dataUscita;

  function __construct($_titolo, $_regista, $_dataUscita)
  {
    $this->setTitolo($_titolo);
    $this->setRegista($_regista);
    $this->setDataUscita($_dataUscita);
  }

  public function getTitolo()
  {
    return $this->titolo;
  }

  public function setTitolo($titolo)
  {
    $this->titolo = $titolo;

    return $this;
  }

  public function getRegista()
  {
    return $this->regista;
  }

  public function setRegista($regista)
  {
    $this->regista = $regista;

    return $this;
  }

  public function getDataUscita()
  {
    return $this->dataUscita;
  }

  public function setDataUscita($dataUscita)
  {
    $this->dataUscita = $dataUscita;

    return $this;
  }

  public function getPaeseProduzione()
  {
    return $this->paesePruduzione;
  }

  public function printText()
  {
    $titolo = $this->getTitolo();
    $regista = $this->getRegista();
    $dataUscita = $this->getDataUscita();
    $paeseProduzione = $this->getPaeseProduzione();

    echo "
      <h3>$titolo</h3>
      <h5>$regista</h5>
      <h5>$paeseProduzione</h5>
      <h5>$dataUscita</h5>
      ";
  }
}
