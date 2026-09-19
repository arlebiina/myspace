<?php

class ProfileModel {
    public function getProfileData() {
        return [
            'name' => 'xXx...KandiThrasH...xXx',
            'myspace_url' => 'http://myspace.2kool4u.net',
            'tagline' => "rawr means i s2 you in dinosaur !\n\nKandi\n18 / Bi\nTaken\n02.14.08 <33\n***",
            'last_login' => '6/7/2013',
            'avatar' => './assets/images/gyaru.gif',
            'interests' => [
                'General' => 'Music, hanging w/ friends, killin posers',
                'Music' => 'BMTH, A7X, ADTR, MIW, BvB, TBS',
                'Movies' => 'Horror movies (:',
                'Television' => 'Family Guy, South Park',
                'Books' => 'Anything scary',
                'Heroes' => 'My chemical romance </3'
            ],
    'friends' => [
    ['name' => 'black☆star 🌟', 'image' => './assets/images/blackstar.jpg', 'url' => 'https://souleater.fandom.com/wiki/Black%E2%98%86Star'],
    ['name' => 'denji 🪚',      'image' => './assets/images/denji.jpg',     'url' => 'https://chainsaw-man.fandom.com/wiki/Denji'],
    ['name' => 'yui 🎸',        'image' => './assets/images/aya.jpg',       'url' => 'https://k-on.fandom.com/wiki/Yui_Hirasawa'],
    ['name' => 'arlecchino 🩸', 'image' => './assets/images/arlecchino.jpg',     'url' => 'https://genshin-impact.fandom.com/wiki/Arlecchino'],
    ['name' => 'mitsuri 🍡',   'image' => './assets/images/mitsuri.jpg',    'url' => 'https://kimetsu-no-yaiba.fandom.com/wiki/Mitsuri_Kanroji'],
    ['name' => 'maomao 🍃',    'image' => './assets/images/maomao.jpg',     'url' => 'https://kusuriya.fandom.com/wiki/Maomao'],
    ['name' => 'naruto 🍥',    'image' => './assets/images/naruto.jpg',     'url' => 'https://naruto.fandom.com/pt-br/wiki/Naruto_Uzumaki'],
    ['name' => 'hyuna 🕶️',     'image' => './assets/images/hyuna.jpg',      'url' => 'https://alienstage.fandom.com/wiki/Hyuna']
]
        ];
    }
}
