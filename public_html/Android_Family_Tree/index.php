<?php
require_once 'Zend/Controller/Front.php';
date_default_timezone_set('Asia/Tokyo');

Zend_Controller_Front::getInstance()->setParam('noViewRenderer', true);
Zend_Controller_Front::run('../../Android_Family_Tree/application/controllers');
