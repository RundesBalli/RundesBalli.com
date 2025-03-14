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

      /**
       * Vortex
       */
      [
        'name' => 'Vortex',
        'filename' => 'Vortex',
        'stats' => [
          'e' => 5.26,
          'i' => 5.64,
          'n' => 2.49,
        ],
      ],
    ],
  ],
];

/**
 * Buttons for fast navigation
 */
$content.= '<div class="buttonGroup">';
foreach($availableProjects as $projects) {
  $content.= '<a href="#'.output($projects['anchor']).'">'.output($projects['title']).'</a>';
}
$content.= '</div>';

/**
 * List view
 */
foreach($availableProjects as $projects) {
  /**
   * Heading
   */
  $content.= '<h2 id="'.output($projects['anchor']).'">'.output($projects['title']).'</h2>';

  /**
   * Iterate through projects
   */
  $content.= '<div class="items">';
  foreach($projects['projects'] as $project) {
    /**
     * Image
     */
    $image = '<a href="/assets/images/openrct2/'.output($project['filename']).'-image.png" target="_blank"><img src="/assets/images/openrct2/'.output($project['filename']).'-thumb.png"></a>';

    /**
     * Name
     */
    $name = '<a href="/assets/files/openrct2/'.output($project['filename']).'.td6" target="_blank">'.output($project['name']).'</a>';

    /**
     * Show as tile/item
     */
    $content.=
    '<div class="item">
      '.$image.'
      <div class="infos">
        <div class="project">
          <div class="name">'.$name.'</div>
        </div>
        <div class="stats">
          <div><span class="fas icon help" title="Excitement">&#xf005;</span>'.$project['stats']['e'].'</div>
          <div><span class="fas icon help" title="Intensity">&#xf625;</span>'.$project['stats']['i'].'</div>
          <div><span class="fas icon help" title="Nausea">&#xf57f;</span>'.$project['stats']['n'].'</div>
        </div>
        <div class="download"><a href="/assets/files/openrct2/'.output($project['filename']).'.td6" target="_blank"><span class="fas icon">&#xf019;</span>Download</a></div>
      </div>
    </div>';
  }
  $content.= '</div>';
}
?>
