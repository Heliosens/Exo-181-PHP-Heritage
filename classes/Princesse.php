<?php


class Princesse extends Personnage
{
    private $saved;

    public function __construct()
    {
        parent::__construct();

        $this->setSaved(0);
        $this->x = 450;
        $this->y = 450;
    }

    /**
     * @return mixed
     */
    public function getSaved()
    {
        return $this->saved;
    }

    /**
     * @param mixed $saved
     */
    public function setSaved($saved): void
    {
        $this->saved = $saved;
    }

}