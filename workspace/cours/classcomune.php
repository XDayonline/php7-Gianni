<?php
    class Commune
    {
        protected $name;

        public function __construct($name)
        {
            $this->name = strtoupper($name);
        }
    }