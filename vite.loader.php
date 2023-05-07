<?php
$dist = 'dist';
$manifest = json_decode(file_get_contents('./' . $dist . '/manifest.json'), true);

function isLocalhost($whitelist = ['127.0.0.1', '::1'])
{
  return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

function hasDevServer()
{
  return file_get_contents('http://127.0.0.1:5173/@vite/client') &&
    file_get_contents('http://127.0.0.1:5173/src/main.js');
}

if (isLocalhost() && hasDevServer()) {
  echo '<script type="module" src="http://127.0.0.1:5173/@vite/client"></script>';
  echo '<script type="module" src="http://127.0.0.1:5173/src/main.js"></script>';
} else {
  echo '<script type="module" src="./' . $dist . '/' . $manifest['src/main.js']['file'] . '"></script>';
  echo '<link rel="stylesheet" href="./' . $dist . '/' . $manifest['src/main.js']['css'][0] . '">';
}
