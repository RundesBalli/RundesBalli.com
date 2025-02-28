<?php
/**
 * pages/projects.php
 * 
 * Project page
 */

$title = 'Projects';
$content.= '<h1><span class="fas icon">&#xf542;</span>Projects</h1>';

/**
 * OG Tags
 */
$ogDescription = 'A collection of all my public projects. Websites, tools, scripts, telegram bots, snippets and more...';

/**
 * Project array
 */
$availableProjects = [
  /**
   * Websites
   */
  [
    'title' => 'Websites',
    'faClass' => 'fas',
    'faSymbol' => 'f0ac',
    'projects' => [
      /**
       * PHP-Noise website
       */
      [
        'name' => 'PHP-Noise.com',
        'faClass' => 'fas',
        'faSymbol' => 'f03e',
        'thumb' => 'phpNoiseCom',
        'url' => 'https://php-noise.com',
        'description' => 'Generate random noisy images as background images for websites, flyers and so on.',
        'sourceUrl' => 'https://github.com/RundesBalli/php-noise.com',
        'badges' => [
          'php',
          'html5',
          'css3',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],

      /**
       * PHP-Noise CLI/API
       */
      [
        'name' => 'PHP-Noise CLI',
        'faClass' => 'fas',
        'faSymbol' => 'f03e',
        'thumb' => 'phpNoise',
        'url' => NULL,
        'description' => 'The CLI script and API for the above mentioned PHP-Noise website.',
        'sourceUrl' => 'https://github.com/RundesBalli/php-noise',
        'badges' => [
          'php',
          'cli',
          'api',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],

      /**
       * Tankersparnis.net
       */
      [
        'name' => 'Tankersparnis.net',
        'faClass' => 'fas',
        'faSymbol' => 'f52f',
        'thumb' => 'tankersparnis',
        'url' => 'https://tankersparnis.net',
        'description' => 'German portal for easy calculation of money saved when refueling with LPG compared to conventional fuels.',
        'sourceUrl' => 'https://github.com/RundesBalli/tankersparnis',
        'badges' => [
          'php',
          'html5',
          'css3',
          'sql',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],

  /**
   * Projects of friends I have collaborated on
   */
  [
    'title' => 'Projects of friends I have collaborated on',
    'faClass' => 'fas',
    'faSymbol' => 'e533',
    'projects' => [
      /**
       * Nezos.Cooking
       */
      [
        'name' => 'Nezos.Cooking',
        'faClass' => 'fas',
        'faSymbol' => 'f543',
        'thumb' => 'nezosCooking',
        'url' => 'https://nezos.cooking',
        'description' => 'German recipe collection from my friend <a href="https://nezos.wtf" target="_blank" rel="noopener">Nezos</a>.',
        'sourceUrl' => 'https://github.com/RundesBalli/cooking',
        'badges' => [
          'php',
          'html5',
          'css3',
          'sql',
        ],
        'tasks' => 'Backend and Frontend',
        'note' => 'The recipes are not from me.',
      ],

      /**
       * Boomerparty.live
       */
      [
        'name' => 'Boomerparty.live',
        'faClass' => 'fas',
        'faSymbol' => 'f144',
        'thumb' => 'boomerparty',
        'url' => 'https://boomerparty.live',
        'description' => 'Official website for the Boomerparty-Playlist on <a href="https://open.spotify.com/playlist/64WfneVI8dqmpd6T6QKAMs" target="_blank" rel="noopener">Spotify</a> and <a href="https://www.youtube.com/playlist?list=PLOnRDACaCcSMom4d1cAxxaoFjeP9167I8" target="_blank" rel="noopener">YouTube</a>. A community project of my friend <a href="https://pr0gramm.com/user/KaiserMolay" target="_blank" rel="noopener">KaiserMolay</a>.',
        'sourceUrl' => 'https://github.com/RundesBalli/boomerparty.live',
        'badges' => [
          'php',
          'html5',
          'css3',
        ],
        'tasks' => 'Whole website without photographs and images.',
        'note' => 'The playlist is maintained by KaiserMolay.',
      ],
    ],
  ],

  /**
   * Satire and Fun
   */
  [
    'title' => 'Satire and Fun',
    'faClass' => 'fas',
    'faSymbol' => 'f59b',
    'projects' => [
      /**
       * Anti-Ananas Club
       */
      [
        'name' => 'Anti-Ananas Club',
        'faClass' => 'fas',
        'faSymbol' => 'f00d',
        'thumb' => 'antiAnanasClub',
        'url' => 'https://anti-ananas.club',
        'description' => 'A multilingual satire counter-reaction project to the Hawaii pizza meme. („Ananas“ = Pineapple)',
        'sourceUrl' => 'https://github.com/RundesBalli/anti-ananas.club',
        'badges' => [
          'php',
          'html5',
          'css3',
          'js',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],

      /**
       * Anti-Ananas Club pr0gramm bot
       */
      [
        'name' => 'Anti-Ananas pr0gramm bot',
        'faClass' => 'fas',
        'faSymbol' => 'f544',
        'thumb' => 'antiAnanasBot',
        'url' => NULL,
        'description' => 'Anti-Ananas.Club comment-autoresponse bot for the German imageboard <a href="https://pr0gramm.com" target="_blank" rel="noopener">pr0gramm.com</a>',
        'sourceUrl' => 'https://github.com/RundesBalli/pr0gramm-antiAnanas',
        'badges' => [
          'php',
          'api',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],

      /**
       * Pfandautomat.com
       */
      [
        'name' => 'Pfandautomat.com',
        'faClass' => 'fas',
        'faSymbol' => 'f72f',
        'thumb' => 'pfandautomat',
        'url' => 'https://pfandautomat.com',
        'description' => 'A little German fun project about the very annoying oneway-bottle deposit machines (= „Pfandautomat“) known in Germany.',
        'sourceUrl' => 'https://github.com/RundesBalli/Pfandautomat.com',
        'badges' => [
          'php',
          'html5',
          'css3',
          'js',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],

  /**
   * Scripts
   */
  [
    'title' => 'Scripts',
    'faClass' => 'fas',
    'faSymbol' => 'f70e',
    'projects' => [
      [
        'name' => 'lightweight-PHP-Boilerplate',
        'faClass' => 'fas',
        'faSymbol' => 'f0ad',
        'thumb' => 'boilerplate',
        'url' => NULL,
        'description' => 'A lightweight PHP boilerplate and customizable code-foundation for building secure and dynamic websites with ease.',
        'sourceUrl' => 'https://github.com/RundesBalli/lightweight-PHP-Boilerplate',
        'badges' => [
          'php',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'escpos-php-driver',
        'faClass' => 'fas',
        'faSymbol' => 'f02f',
        'thumb' => 'escpos',
        'url' => NULL,
        'description' => 'A driver for Epson <code>ESC/POS</code> thermal printers.',
        'sourceUrl' => 'https://github.com/RundesBalli/escpos-php-driver',
        'badges' => [
          'php',
          'cli',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'terminal-imager',
        'faClass' => 'fas',
        'faSymbol' => 'f302',
        'thumb' => 'terminalImager',
        'url' => NULL,
        'description' => 'A CLI script to convert images to <code>ANSI escape code</code> images.',
        'sourceUrl' => 'https://github.com/RundesBalli/terminal-imager',
        'badges' => [
          'php',
          'cli',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'jsonDumper',
        'faClass' => 'fas',
        'faSymbol' => 'f793',
        'thumb' => 'jsonDumper',
        'url' => NULL,
        'description' => 'Simple JSON dumper with token and file listing.',
        'sourceUrl' => 'https://github.com/RundesBalli/jsonDumper',
        'badges' => [
          'php',
          'json',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],

  /**
   * Snippets
   */
  [
    'title' => 'Snippets',
    'faClass' => 'fas',
    'faSymbol' => 'f121',
    'projects' => [
      [
        'name' => 'clickableLinks',
        'faClass' => 'fas',
        'faSymbol' => 'f0c1',
        'thumb' => 'clickableLinks',
        'url' => NULL,
        'description' => 'Function to automatically link URLs in texts.',
        'sourceUrl' => 'https://github.com/RundesBalli/phpSnippets/tree/master/clickableLinks',
        'badges' => [
          'php',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'hex2rgb',
        'faClass' => 'fas',
        'faSymbol' => '23',
        'thumb' => 'hex2rgb',
        'url' => NULL,
        'description' => 'Simple PHP function based on the <a href="https://www.php.net/manual/en/function.hexdec.php" target="_blank" rel="noopener">hexdec</a> function and RegEx.',
        'sourceUrl' => 'https://github.com/RundesBalli/phpSnippets/tree/master/hex2rgb',
        'badges' => [
          'php',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'Tidy function call',
        'faClass' => 'fas',
        'faSymbol' => 'f51a',
        'thumb' => 'tidy',
        'url' => NULL,
        'description' => 'Parameterised function call of the tidy function.',
        'sourceUrl' => 'https://github.com/RundesBalli/phpSnippets/blob/master/tidyOutput',
        'badges' => [
          'php',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'Fractionizer',
        'faClass' => 'fas',
        'faSymbol' => '25',
        'thumb' => 'fractionizer',
        'url' => NULL,
        'description' => 'Simple number format function with quarter, half and three quarter fraction output.',
        'sourceUrl' => 'https://github.com/RundesBalli/phpSnippets/tree/master/fractionizer',
        'badges' => [
          'php',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'formatTime',
        'faClass' => 'fas',
        'faSymbol' => 'f017',
        'thumb' => 'formatTime',
        'url' => NULL,
        'description' => 'Simple PHP function to format a given time in seconds to a readable time.',
        'sourceUrl' => 'https://github.com/RundesBalli/phpSnippets/tree/master/formatTime',
        'badges' => [
          'php',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],

  /**
   * Telegram bots
   */
  [
    'title' => 'Telegram Bots',
    'faClass' => 'fab',
    'faSymbol' => 'f2c6',
    'projects' => [
      [
        'name' => 'Random data bot',
        'faClass' => 'fas',
        'faSymbol' => 'f522',
        'thumb' => 'randomDataBot',
        'url' => 'https://t.me/zufallbot',
        'description' => 'German random number, letter and lottery number generator.',
        'sourceUrl' => 'https://github.com/RundesBalli/telegram-Zufallbot',
        'badges' => [
          'php',
          'api',
          'telegram',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'Chat-Id bot',
        'faClass' => 'fas',
        'faSymbol' => 'f47f',
        'thumb' => 'chatIdBot',
        'url' => 'https://t.me/rb_chatId_bot',
        'description' => 'Returns the Chat ID in Groups and private chats.',
        'sourceUrl' => 'https://github.com/RundesBalli/telegramChatIdBot',
        'badges' => [
          'php',
          'api',
          'telegram',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
      [
        'name' => 'Server online-status check with reporting to telegram',
        'faClass' => 'fas',
        'faSymbol' => 'f06e',
        'thumb' => 'serverStatus',
        'url' => NULL,
        'description' => 'Simple <code>netcat</code> script to check the online status of certain services on a remote server.',
        'sourceUrl' => 'https://gist.github.com/RundesBalli/4bdcf555c78c17a7b917de31cd7b4df0',
        'badges' => [
          'php',
          'api',
          'cli',
          'telegram',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],

  /**
   * Crawler
   */
  [
    'title' => 'Crawler',
    'faClass' => 'fas',
    'faSymbol' => 'f717',
    'projects' => [
      [
        'name' => 'ADR Crawler',
        'faClass' => 'fas',
        'faSymbol' => 'f7ba',
        'thumb' => 'adr',
        'url' => NULL,
        'description' => 'Ambient Dose Rate (German: ODL = Ortsdosisleistung) crawler for ~1700 monitoring sites within Germany and ~110 monitoring sites within austria.',
        'sourceUrl' => 'https://github.com/RundesBalli/ADR-Crawler',
        'badges' => [
          'php',
          'cli',
          'api',
        ],
        'tasks' => NULL,
        'note' => NULL,
      ],
    ],
  ],

  /**
   * Discord
   */
  [
    'title' => 'Discord',
    'faClass' => 'fab',
    'faSymbol' => 'f392',
    'projects' => [
      [
        'name' => 'Reminder Bot',
        'faClass' => 'fas',
        'faSymbol' => 'f0a1',
        'thumb' => 'reminder',
        'url' => NULL,
        'description' => 'Script to automatically sends a predefined text as a bot or via WebHook to a text channel.',
        'sourceUrl' => 'https://github.com/RundesBalli/discord-reminderBot',
        'badges' => [
          'php',
          'cli',
          'discord',
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
        <img src="/assets/images/projects/'.$project['thumb'].'.png" alt="'.$project['name'].'">
      </a>';
    } else {
      /**
       * There is a website to be linked.
       */
      $projectName = '<a href="'.output($project['url']).'" target="_blank" rel="noopener">'.output($project['name']).'</a>';
      $image = '<a href="'.$project['url'].'" target="_blank" rel="noopener">
        <img src="/assets/images/projects/'.$project['thumb'].'.png" alt="'.$project['name'].'">
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

/**
 * More
 */
$content.= '<p>Many of my projects are also available on <span class="fab icon">&#xf09b;</span><a href="https://github.com/RundesBalli" target="_blank" rel="noopener">GitHub</a>.</p>';
?>
