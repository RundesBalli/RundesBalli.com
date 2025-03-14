<?php
/**
 * pages/openrct2.php
 * 
 * OpenRCT2 project page
 */

$title = 'OpenRCT2 Projects';
$content.= '<h1><span class="fas icon">&#xf546;</span>OpenRCT2 Projects</h1>';

/**
 * OG Tags
 */
$ogDescription = 'A collection of my OpenRCT2 coasters.';

/**
 * Project array
 */
$availableProjects = [
  /**
   * Looping Roller Coaster
   */
  [
    'title' => 'Looping Roller Coaster',
    'anchor' => 'looping',
    'projects' => [
      /**
       * Loopyloop
       */
      [
        'name' => 'Loopyloop',
        'filename' => 'Loopyloop',
        'stats' => [
          'e' => 5.17,
          'i' => 6.57,
          'n' => 2.48,
        ],
      ],

      /**
       * Ribbon
       */
      [
        'name' => 'Ribbon',
        'filename' => 'Ribbon',
        'stats' => [
          'e' => 5.21,
          'i' => 5.91,
          'n' => 2.25,
        ],
      ],

      /**
       * Twisted Snake
       */
      [
        'name' => 'Twisted Snake',
        'filename' => 'Twisted_Snake',
        'stats' => [
          'e' => 5.37,
          'i' => 6.14,
          'n' => 2.81,
        ],
      ],
  ],
];
?>
