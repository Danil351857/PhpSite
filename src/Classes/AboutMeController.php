<?php

namespace Classes;

use Classes\Viewer;

class AboutMeController
{
    public function index(): void
    {
        $data = [
            'title' => 'About Me',
            'name' => 'Danil',
            'age' => 18,
            'skills' => ['PHP', 'JavaScript', 'HTML', 'CSS', 'Git'],
            'description' => 'Я навчаюся веб-розробці та створюю свої перші PHP-проекти.'
        ];

        Viewer::show('aboutme', $data);
    }
}