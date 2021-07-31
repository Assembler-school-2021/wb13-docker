<?php
      define( 'DB_NAME', 'wordpress' );
      define( 'DB_USER', 'devops' );
      define( 'DB_PASSWORD', 'vahKei4ovah0ieLasohaceiTahxeelae' );
      define( 'DB_HOST', 'localhost' );
      define( 'DB_CHARSET', 'utf8' );
      define( 'DB_COLLATE', '' );
      define('AUTH_KEY',         '?OA2oBH3Gb=Rsk>F?-7vz=QI6UQ,$teRnTN^R<E7)>yu:rMTHGJ+:D#)09qqNvZ~');
      define('SECURE_AUTH_KEY',  'Ppth=A].z+u]8O~1&;<~So71{i-s-_K.YA!+c6a/yo-K=J7[N~P&+4?)MsIGEcj-');
      define('LOGGED_IN_KEY',    'y%3K5xpGGCsf)/K{@xnh8_ &DC}DzU:F)om$?vxc1-}M/,LDHVia~Y>MQlotMhMz');
      define('NONCE_KEY',        'jR->a%-=}+t&^EyK} fP-xa9DL7..0WD[epDu**Q>AKFs|@$/5UAEIxrxy:n]1?@');
      define('AUTH_SALT',        'AxjF?Hc%9J+Y{v3m+(IP-dX9q ci/wG~+mJg<9(QClE+IFC|(1CN|T~(ppsR04UQ');
      define('SECURE_AUTH_SALT', 'y|uuZ2Fz[~WSZdxYc4,|EJAOFExjh|YhRPopN,}&A2SE??.PGDY8<^_$-~Q|A8]/');
      define('LOGGED_IN_SALT',   '-B]7Tn|4?^x[!AviVOU9pn&?u@6`N)<)c]49YkJ*/8bjIKaFWrAL;+=}W+;.AIZ|');
      define('NONCE_SALT',       ':f~JQH5K4:!:%,</J%.I81c[q,E:&@zQe$n++W&(R)W,Um)!}mt8A*3t%-7X4`rL');
      $table_prefix = 'wp_';
      define( 'WP_DEBUG', false );
      if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
      }
      require_once ABSPATH . 'wp-settings.php';