<?php

    class mapaController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'dark'
            ];
            @View::render('Mapa', $data);
        }

    }
