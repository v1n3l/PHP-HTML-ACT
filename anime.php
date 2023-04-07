
<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $anime = [
        [   
            "img" => "AOT.jpg",
            "name" => "Attack on Titan",
            "writer" => "Hajime Isayama",
            "published" => "Kodansha",
            "episode" => "88",
            "genre" => ["Action, Dark fantasy ,Post-apocalyptic"]
        ],
        [
            "img" => "Black Clover.jpg",
            "name" => "Black Clover",
            "writer" => "Yūki Tabata",
            "published" => "Shueisha",
            "episode" => "171",
            "genre" => ["Adventure","fantasy"]
        ],
        [
            "img" => "DEMON SLAYER.jpg",
            "name" => "DEMON SLAYER",
            "writer" => "Koyoharu Gotouge",
            "published" => "Shueisha",
            "episode" => "44",
            "genre" => ["Action","Dark fantasy","Post-apocalyptic"]
        ],
        [
            "img" => "Jujutsu kaisen.jpg",
            "name" => "Jujutsu kaisen",
            "writer" => "	Gege Akutami",
            "published" => "Shueisha",
            "episode" => "24",
            "genre" => ["Adventure","Dark fantasy","Supernatural"]
        ],
        [
            "img" => "HERO ACADEMIA.JPG",
            "name" => "HERO ACADEMIA",
            "writer" => "Kōhei Horikoshi",
            "published" => "Shueisha",
            "episode" => "113",
            "genre" => ["Adventure","Science","fantasy","Superhero"]
        ]

    ];

    $data = json_encode($anime);
    echo $data;
    
?>
