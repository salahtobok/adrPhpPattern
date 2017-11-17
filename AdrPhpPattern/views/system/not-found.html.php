<?php
/**
 * Created by PhpStorm.
 * User: salahtobok
 * Date: 25-09-2017
 * Time: 23:08
 */
 $this->header('HTTP/1.1 404 Not Found'); ?>
 <html>
 <head>
     <title>Not Found</title>
     </head>
 <body>
 <h1>Not Found</h1>
 <p><?php echo $this->esc($url_path); ?></p>
 </body>
 </html>