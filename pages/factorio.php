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
  $content.= '<div class="items">';
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
