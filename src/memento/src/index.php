<?php
require 'BookReader.php';
require 'BookMark.php';

$bookReader = new \Memento\BookReader('Core PHP Programming, Third Edition', '103');
$bookMark = new \Memento\BookMark($bookReader);

echo '<pre>';

echo sprintf("title: %s\n", $bookReader->getTitle());
echo sprintf("page: %s\n", $bookReader->getPage());

$bookReader->setPage("104");
$bookMark->setPage($bookReader);
echo sprintf("page: %s\n", $bookReader->getPage());

$bookReader->setPage("123123");
echo sprintf("page: %s\n", $bookReader->getPage());

$bookMark->getPage($bookReader);
echo sprintf("page: %s\n", $bookReader->getPage());