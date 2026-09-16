<?php

class ProfileModel {
    public function getProfileData() {
        return [
            'name' => 'xXx...KandiThrasH...xXx',
            'myspace_url' => 'http://myspace.2kool4u.net',
            'tagline' => "rawr means i ♥ you in dinosaur x3\n***\nKandi\n17 / Bi\nTaken\n02.14.08 <33\n***",
            'last_login' => '6/7/2008',
            'avatar' => './assets/images/perfil.jpg',
            'interests' => [
                'General' => 'Music, hanging w/ friends, killin posers',
                'Music' => 'BMTH, A7X, ADTR, MIW, BvB, TBS',
                'Movies' => 'Horror movies (:',
                'Television' => 'Family Guy, South Park',
                'Books' => 'Anything scary',
                'Heroes' => 'My chemical romance </3'
            ],
                'friends' => [
                ['name' => 'blackstar 🌟', 'image' => './assets/images/blackstar.jpg'],
                ['name' => 'denji 🪚',      'image' => './assets/images/denji.jpg'],
                ['name' => 'yui 🎸',        'image' => './assets/images/yui.jpg'],
                ['name' => 'nefer 🐾',      'image' => './assets/images/nefer.jpg'],
                ['name' => 'mitsuri 🍡',   'image' => './assets/images/mitsuri.jpg'],
                ['name' => 'maomao 🍃',    'image' => './assets/images/maomao.jpg'],
                ['name' => 'naruto 🍥',    'image' => './assets/images/naruto.jpg'],
                ['name' => 'hyuna ✨',     'image' => './assets/images/hyuna.jpg']
            ]
        ];
    }
}