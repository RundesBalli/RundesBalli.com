<?php
/**
 * pages/adsb.php
 * 
 * ADS-B Information Page
 */

$title = 'ADS-B';
$content.= '<h1><span class="fas icon">&#xf072;</span>ADS-B</h1>';

/**
 * OG Tags
 */
$ogDescription = 'The Bratwurst ADS-B project! We are an European group of people interested in the observation of local and international air traffic.';

/**
 * What is ADS-B?
 */
$content.= '<h2><span class="fas icon">&#xe4e3;</span>What is ADS-B?</h2>';
$content.= '<p>Aircraft automatically transmit their position, speed, altitude and other interesting information with their ADS-B transponder. This data is primarily used for air traffic control, but also for analysis of aircraft movements by companies, associations and authorities.</p>';
$content.= '<p>Some aircraft does only send their callsign and no other data. For this purpose a large network of ADS-B receivers are needed on ground to multilaterate/triangulate the aircraft and find out their position, altitude, etc.</p>';

/**
 * Bratwurst ADS-B
 */
$content.= '<h2><span class="fas icon">&#xf519;</span>Bratwurst ADS-B project</h2>';
$content.= '<p>We are an European group of people interested in the observation of local and international air traffic. My responsibilities include project management, marketing, and technical administration.</p>';
$content.= '<p>Take a look at our <a href="https://info.bratwurst.network" target="_blank" rel="noopener">Bratwurst ADS-B information website</a> and become a member of our community! You can find the respective contact options on the linked website.</p>';

$content.= '<p><img class="imgGlow" src="/assets/images/adsb/adsbMap.png" alt="Bratwurst ADS-B" title="Bratwurst ADS-B" width="650" height="379"></p>';

/**
 * ADS-B related projects
 */
$availableProjects = [
  [
    'title' => 'Notifier',
    'faClass' => 'fas',
    'faSymbol' => 'f0f3',
    'projects' => [
      [
        'name' => 'Telegram Notifier',
        'faClass' => 'fas',
        'faSymbol' => 'f0f3',
        'thumb' => 'adsbTelegramNotifier',
        'url' => NULL,
        'description' => 'Notifies via Telegram when an aircraft passes over a certain area.',
        'sourceUrl' => 'https://github.com/RundesBalli/adsbTelegramNotifier',
        'badges' => [
          'php',
          'api',
          'telegram',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],
];

/**
 * List view
 */
foreach($availableProjects as $projects) {
  /**
   * Heading
   */
  $content.= '<h2><span class="'.output($projects['faClass']).' icon">&#x'.output($projects['faSymbol']).';</span>'.output($projects['title']).'</h2>';

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
      $projectName = '<a href="'.output($project['sourceUrl']).'" target="_blank" rel="noopener">'.output($project['name']).'</a>';
      $image = '<a href="'.$project['sourceUrl'].'" target="_blank" rel="noopener">
        <img src="/assets/images/adsb/'.$project['thumb'].'.png" alt="'.$project['name'].'">
      </a>';
    } else {
      /**
       * There is a website to be linked.
       */
      $projectName = '<a href="'.output($project['url']).'" target="_blank" rel="noopener">'.output($project['name']).'</a>';
      $image = '<a href="'.$project['url'].'" target="_blank" rel="noopener">
        <img src="/assets/images/adsb/'.$project['thumb'].'.png" alt="'.$project['name'].'">
      </a>';
    }

    /**
     * Check whether there are any notes or tasks.
     */
    $description = $project['description'];
    if(!empty($project['tasks'])) {
      $description.= '<div class="spacer-s"></div><span class="highlight">Tasks:</span> '.output($project['tasks']);
    }
    if(!empty($project['note'])) {
      $description.= '<div class="spacer-s"></div><span class="highlight">Note:</span> '.output($project['note']);
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
