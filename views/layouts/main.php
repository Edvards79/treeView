<?php

use app\core\Application; ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="/js/treeView.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link href="/css/home.css" rel="stylesheet">
   <link href="/css/popup.css" rel="stylesheet">
   <link href="/css/treeView.css" rel="stylesheet">
   <link href="/css/error.css" rel="stylesheet">
   <title>Tree view site</title>
</head>

<body>



<?php if (Application::$app->session->getFlash("success")) : ?>
   <div class="wrapperAlert">
      <div class="contentAlert">
         <div class="topHalf">
            <p><svg viewBox="0 0 512 512" width="100" title="check-circle">
                  <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
               </svg></p>
            <h1>Congratulations</h1>
            <ul class="bg-bubbles">
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
            </ul>
         </div>
         <div class="bottomHalf">
            <p><?php echo Application::$app->session->getFlash("success") ?></p>
            <button id="alertMO" onclick="document.getElementsByClassName('wrapperAlert')[0].style.display = 'none';" >Okay</button>
         </div>
      </div>
   </div>
<?php endif; ?>






   {{content}}
   <script src="/js/signupHandler.js"></script>
</body>
</html>
