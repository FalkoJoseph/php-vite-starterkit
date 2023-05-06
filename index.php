<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Back-end Server</title>
  <link rel="stylesheet" href="./dist/assets/main.css" />
</head>

<body>
  <div id="app"></div>
  <script type="module" src="./dist/assets/main.js"></script>

  <!-- if development -->
  <?php
  function isLocalhost($whitelist = ['127.0.0.1', '::1'])
  {
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
  }
  ?>
  <?php if (isLocalhost()) : ?>
    <script type="module" src="http://127.0.0.1:5173/@vite/client"></script>
    <script type="module" src="http://127.0.0.1:5173/dist/assets/main.js"></script>
  <?php endif; ?>
</body>

</html>
