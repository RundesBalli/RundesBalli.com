<?php
/**
 * pages/factorio.php
 * 
 * Factorio mods & blueprints
 */

$title = 'Factorio blueprints and mods';
$content.= '<h1><span class="fas icon">&#xf013;</span>Factorio blueprints and mods</h1>';

/**
 * OG Tags
 */
$ogDescription = 'A collection of my factorio blueprints and mods. Mining drill arrays, rail system, various furnace setups, tweaks and more...';

/**
 * Factorio projects
 */
$availableProjects = [
  /**
   * Mods
   */
  [
    'title' => 'Mods',
    'anchor' => 'mods',
    'faClass' => 'fas',
    'faSymbol' => 'f085',
    'projects' => [
      /**
       * SimpleRocketParts
       */
      [
        'name' => 'SimpleRocketParts',
        'faClass' => 'fas',
        'faSymbol' => 'f197',
        'thumb' => 'simpleRocketParts',
        'url' => 'https://mods.factorio.com/mod/SimpleRocketParts',
        'flag' => 'en',
        'description' => 'A mod that simplifies the recipes for rocket parts, so that in the end game, your main concern is procuring a vast amount of raw materials rather than managing the factory.',
        'sourceUrl' => 'https://github.com/RundesBalli/factorio-simpleRocketParts',
        'badges' => NULL,
      ],
    ],
  ],

  /**
   * Blueprints
   */
  [
    'title' => 'Blueprints & Blueprint Books',
    'anchor' => 'blueprints',
    'faClass' => 'fas',
    'faSymbol' => 'f02d',
    'projects' => [
      /**
       * Electric mining drill arrays
       */
      [
        'name' => 'Electric mining drill arrays',
        'faClass' => 'fas',
        'faSymbol' => 'e4c3',
        'thumb' => 'miningArrays',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/electric-mining-drill-arrays',
        'flag' => 'en',
        'description' => 'Space saving setup of electric mining drills in various array-sizes and all belt speeds.',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/electric-mining-drill-arrays/blueprint-book.txt',
        'badges' => NULL,
      ],
      /**
       * Rail system
       */
      [
        'name' => 'Rail system',
        'faClass' => 'fas',
        'faSymbol' => 'f238',
        'thumb' => 'rail',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/rail-system',
        'flag' => 'en',
        'description' => 'Right-hand rail system for five part trains (e.g. 2x locomotive, 3x cargo-wagon).',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/rail-system/blueprint-book.txt',
        'badges' => NULL,
        'note' => 'Please refer to the notes in the GitHub Repository at the end of the ReadMe file.',
      ],
      /**
       * Furnaces
       */
      [
        'name' => 'Furnaces',
        'faClass' => 'fas',
        'faSymbol' => 'e4f1',
        'thumb' => 'furnaces',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/furnaces',
        'flag' => 'en',
        'description' => 'Various furnace setups.',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/furnaces/blueprint-book.txt',
        'badges' => NULL,
      ],
      /**
       * 7-segment displays
       */
      [
        'name' => '7-segment displays',
        'faClass' => 'fas',
        'faSymbol' => '23',
        'thumb' => '7segment',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/7-segment-displays',
        'flag' => 'en',
        'description' => '7-segment-displays in various sizes and digit counts.',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/7-segment-displays/blueprint-book.txt',
        'badges' => NULL,
        'note' => 'The display color is adjustable via a constant combinator.',
      ],
      /**
       * Power sources
       */
      [
        'name' => 'Power sources',
        'faClass' => 'fas',
        'faSymbol' => 'f0e7',
        'thumb' => 'power',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/power-sources',
        'flag' => 'en',
        'description' => 'Some early- and lategame power sources. Boiler and solar power.',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/power-sources/blueprint-book.txt',
        'badges' => NULL,
      ],
      /**
       * Kovarex
       */
      [
        'name' => 'Automatic Kovarex Enrichment Process',
        'faClass' => 'fas',
        'faSymbol' => 'f7ba',
        'thumb' => 'kovarex',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/kovarex-enrichment-process',
        'flag' => 'en',
        'description' => 'Automatic Kovarex Enrichment Process with automatic feeding of additional machines when the first machines are running at the limit.',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/kovarex-enrichment-process/blueprint%2Cblue.txt',
        'badges' => NULL,
      ],
      /**
       * 480 MW nuclear power plant
       */
      [
        'name' => '480 MW nuclear power plant',
        'faClass' => 'fas',
        'faSymbol' => 'f7b9',
        'thumb' => 'nuclearPowerPlant',
        'url' => 'https://github.com/RundesBalli/factorio-blueprints/tree/master/nuclear-power',
        'flag' => 'en',
        'description' => 'Symmetric 480 MW Nuclear Power Plant with automatic fuel supply on demand.',
        'sourceUrl' => 'https://raw.githubusercontent.com/RundesBalli/factorio-blueprints/master/nuclear-power/blueprint.txt',
        'badges' => NULL,
        'note' => 'On the first run, you must insert one (!) single uranium fuel cell per reactor, to start the plant.',
      ],
    ],
  ],
];

/**
 * Buttons for fast navigation
 */
$content.= '<div class="buttonGroup">';
foreach($availableProjects as $projects) {
  $content.= '<a href="#'.output($projects['anchor']).'"><span class="'.output($projects['faClass']).' icon">&#x'.output($projects['faSymbol']).';</span>'.output($projects['title']).'</a>';
}
$content.= '</div>';

/**
 * List view
 */
foreach($availableProjects as $projects) {
  /**
   * Heading
   */
  $content.= '<h2 id="'.output($projects['anchor']).'"><span class="'.output($projects['faClass']).' icon">&#x'.output($projects['faSymbol']).';</span>'.output($projects['title']).'</h2>';

  /**
   * Iterate through projects
   */
  $content.= '<div class="widerItems">';
  foreach($projects['projects'] as $project) {
    /**
     * Check whether a project website has to be linked.
     */
    if(empty($project['url'])) {
      /**
       * There is no website to be linked.
       */
      $projectName = '<a href="'.output($project['sourceUrl']).'" '.(stripos($project['sourceUrl'], 'http') !== FALSE ? 'target="_blank" rel="noopener"' : NULL).'>'.output($project['name']).'</a>';
      $image = '<a href="'.$project['sourceUrl'].'" target="_blank" rel="noopener">
        <img src="/assets/images/factorio/'.$project['thumb'].'.png" alt="'.$project['name'].'">
      </a>';
    } else {
      /**
       * There is a website to be linked.
       */
      $projectName = '<a href="'.output($project['url']).'" '.(stripos($project['url'], 'http') !== FALSE ? 'target="_blank" rel="noopener"' : NULL).'>'.output($project['name']).'</a>';
      $image = '<a href="'.$project['url'].'" target="_blank" rel="noopener">
        <img src="/assets/images/factorio/'.$project['thumb'].'.png" alt="'.$project['name'].'">
      </a>';
    }

    /**
     * Check whether there are any notes or tasks.
     */
    $description = $project['description'];
    if(!empty($project['tasks'])) {
      $description.= '<div class="spacer-s"></div><span class="highlight">Tasks:</span> '.$project['tasks'];
    }
    if(!empty($project['note'])) {
      $description.= '<div class="spacer-s"></div><span class="highlight">Note:</span> '.$project['note'];
    }

    /**
     * Check whether there are any badges to display.
     */
    $badges = [];
    if(!empty($project['badges'])) {
      foreach($project['badges'] as $badge) {
        $badges[] = BADGE[$badge];
      }
    }
    $badges[] = ((!empty($project['flag']) AND !empty(FLAGS[$project['flag']])) ? FLAGS[$project['flag']] : NULL);

    /**
     * Show as tile/item
     */
    $content.=
    '<div class="item">
      '.$image.'
      <div class="infos">
        <div class="project">
          <div class="name"><span class="'.output($project['faClass']).' icon">&#x'.output($project['faSymbol']).';</span>'.$projectName.'</div>
          '.(!empty($badges) ? '<div class="note">'.implode($badges).'</div>' : NULL).'
          <div class="note"><span class="fab icon">&#xf09b;</span><a href="'.output($project['sourceUrl']).'" target="_blank" rel="noopener">SourceCode</a></div>
        </div>
        <div class="description">'.$description.'</div>
      </div>
    </div>';
  }
  $content.= '</div>';
}
?>
