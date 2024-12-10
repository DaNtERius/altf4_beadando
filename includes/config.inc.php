<?php
// Site title and window title
$ablakcim = array(
    'cim' => 'Vaszilij EDC',
    );

// Header configuration
$fejlec = array(
    'kepforras' => '../media/Vaszilij-EDC.png', // Path to the logo
    'kepalt' => 'logo',            // Alt text for the logo
    'cim' => 'Vaszilij EDC',       // Header title
    'leiras' => 'A Vaszilij EDC egy blog az every day carry magyar szerelemeseinek. Bemutatók késekről, felszerelésekről, és sok minden másról.',
    'author' => 'VaszilijEDC Ultra',
);
// Footer configuration
$lablec = array(
    'copyright' => 'Copyright ' . date("Y") . '.',
    'ceg' => 'NetMasters Europe Kft.'
);

// Page definitions
$oldalak = array(
    '/' => array(
        'fajl' => 'home',
        'szoveg' => 'Főoldal',
        'menun' => array(1, 1), // Menu visibility: [logged out, logged in]
    ),
    'rolunk' => array(
        'fajl' => 'rolunk',
        'szoveg' => 'Rólunk',
        'menun' => array(1, 1),
    ),
    'blog' => array(
    'fajl' => 'blog',
    'szoveg' => "Blog",
    'menun' => array(1, 1),
),
    'galleria' => array(
        'fajl' => 'galleria',
        'szoveg' => 'Galléria',
        'menun' => array(1, 1),
    ),
    'messages' => array(
        'fajl' => 'uzenetek',
        'szoveg' => 'Üzenetek',
        'menun' => array(1, 1),
    ),
    'kapcsolat' => array(
        'fajl' => 'kapcsolat',
        'szoveg' => 'Kapcsolatfelvétel',
        'menun' => array(1, 1),
    ),
    'kuldes' => array(
        'fajl' => 'kuldes',
        'szoveg' => '',
        'menun' => array(0, 0),
    ),
    'login' => array(
      'fajl' => 'belepes',
      'szoveg' => '',
        'menun' => array(1, 0),
    ),
    'logout' => array(
        'fajl' => 'kilepes',
        'szoveg' => 'Kijelentkezés',
        'menun' => array(0, 0),
    ),
    'belep' => array(
        'fajl' => 'belep',
        'szoveg' => '',
        'menun' => array(0, 0),
    ),
    'regisztral' => array(
        'fajl' => 'regisztral',
        'szoveg' => '',
        'menun' => array(0, 0),
    )
);
$hiba_oldal = array(
    'fajl' => '404',
    'szoveg' => 'A keresett oldal nem található!',
);
