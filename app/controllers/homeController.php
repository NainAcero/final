<?php

    class homeController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'dark'
            ];
            @View::render('Nuami', $data);
        }

        public function home(){
            $data = [
                'acceso' => 'hackathon-covid-19'
            ];
            @View::render('Dashboard', $data);
        }

        public function dashboard(){
            if($_POST["username"] != null && $_POST["password"] != null){
                if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
                    $data = [
                        'acceso' => 'hackathon-covid-19'
                    ];
                    @View::render('Dashboard', $data);
                }else{
                    header('Location: '. URL);
                    echo "wadfawd";
                }
            }else{
                header('Location: '. URL);
                echo "wadfawd";
            }
        }

        function test(){
            $data =
            [
                'title' => 'Nuami Framework',
                'bg'    =>  'dark'
            ];
            echo '<pre>';
            /*
                try{

                    $user = new  usuarioModel();
                    $user->name         =   'Nain';
                    $user->email        =   'nain.acero@gmail.com';
                    $user->password     =   password_hash("nuamiFramework", PASSWORD_BCRYPT);
                    $user->created_ad   =   now();

                    $id = $user->add();
                    echo $id;


                    $user = new  usuarioModel();
                    $user->id           =   1;
                    $user->name         =   'Nain';
                    $user->email        =   'nain.acero@gmail.com';
                    $user->password     =   password_hash("nuamiFramework", PASSWORD_BCRYPT);
                    $user->created_ad   =   now();

                    print_r($user->update());

                } catch(Exception $e){
                    echo 'Hubo un error : '.$e->getMessage();
                }
            */
            echo '</pre>';
            @View::render('test', $data);
        }

        function flash(){
            @View::render('flash');
        }

    }
