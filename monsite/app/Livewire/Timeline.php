<?php

namespace App\Livewire;

use Livewire\Component;

class Timeline extends Component
{

    public $points = [
        ['text1' => '2017', 'text2' => 'Baccalauréat', 'text3' => 'LYCEE ST VINCENT DE PAUL', 'text4' => 'BAC Pro Communication Visuelle et Plurémédia'],
        ['text1' => '2018', 'text2' => '1ère année EPITECH', 'text3' => 'EPITECH Bordeaux', 'text4' => 'Programme Grande Ecole'],
        ['text1' => 'Mars 2019 - Juin 2019', 'text2' => 'Stage développeur web', 'text3' => 'Logyline, Bordeaux', 'text4' => 'Développement d’un site internet: HTML/CSS/JQuery.'],
        ['text1' => 'Août 2019 - Décembre 2019', 'text2' => 'Stage développeur web', 'text3' => 'Wiilog, Bordeaux', 'text4' => 'Amélioration des applications: Nous avons enrichi l’application en ajoutant de nouvelles fonctionnalités tout en corrigeant les bugs identifiés.'],
        ['text1' => '2020', 'text2' => 'Pré Msc', 'text3' => 'EPITECH, Bordeaux', 'text4' => 'titre RNCP niveau 6 responsable de projet web et mobile'],
        ['text1' => 'Janvier 2021 - Août 2021', 'text2' => 'Alternance développeur web', 'text3' => 'Atelier Chris, Bordeaux', 'text4' => 'Refonte graphique du site, Récupération de données (scraping), Référencement web avec Google'],
        ['text1' => 'Octobre 2021 - Août 2022', 'text2' => 'Alternance développeur web', 'text3' => 'Overfull, Bordeaux', 'text4' => 'Amélioration de l’application: Ajout de nouvelles fonctionnalités, Correction de bugs'],
        ['text1' => 'Novembre 2022 - Août 2023', 'text2' => 'Alternance développeur web', 'text3' => 'NLTechno, Bordeaux', 'text4' => 'Amélioration de l’application: Ajout de nouvelle fonctionnalité : PHP/JQuery/SQL, Correction de bug'],
        ['text1' => '2023', 'text2' => 'Ingénieur', 'text3' => 'Epitech, Bordeaux', 'text4' => 'titre de niveau 7, d’ Architecte Logiciels et Développeur d’Applications']
    ];

    public function render()
    {
        return view('livewire.timeline');
    }
}
