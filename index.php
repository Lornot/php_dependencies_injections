<?php

    include 'vendor/autoload.php';

    class UserManager
    {
        private $mailer;
        private $mailer2;
        private $user;

        public function __construct(BabyMailer $mailer, RockaMailer $mailer2, User $user)
        {
            $this->mailer = $mailer;
            $this->mailer2 = $mailer2;
            $this->user = $user;
        }

        public function register($email, $password)
        {

            $this->mailer->mail($email, 'Hello and welcome');
        }

    }

    $container = DI\ContainerBuilder::buildDevContainer();

    interface Mailer {

    }

    class User {

    }

    class BabyMailer implements Mailer {

    }

    class RockaMailer implements Mailer {

    }

    /** Dependency injections container injects all classes from the constructor for himself (we don't need to create objects of these classes and create )*/
    $userManager = $container->get('UserManager');
