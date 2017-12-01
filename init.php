<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 15.06.17
 * Time: 15:20
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-fancybox-plus')
    ->usePackage('larakit/lk-angular')
    ->setSourceDir('public')
    ->cssPackage('jquery.fancybox-plus.css')
    ->jsPackage('jquery.fancybox-plus.js')
    ->jsPackage('angular-fancybox-plus.js');
\Larakit\LkNgModule::register('fancyboxplus');