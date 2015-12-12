<?php
namespace infrajs\yml;

use infrajs\path\Path;
use infrajs\ans\Ans;

if (!is_file('vendor/autoload.php')) {
    chdir('../../../../');
    require_once('vendor/autoload.php');
}
$ans = [];
if (!is_dir('data/')) {
	return Ans::err($ans, 'Папки data нет');
}
if (!is_file('data/yml.xlsx')) {
	return Ans::err($ans, 'Файла excel нет');
}
$src = '~yml.xlsx';
if (!Path::theme($src)) {
	return Ans::err($ans, 'Файл не найден.' . $src);
}
return Ans::ret($ans);
