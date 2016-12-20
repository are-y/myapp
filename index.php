<?php
/**
 *  * @name index
 *   * @desc 入口文件
 *     */
$objApplication = Bd_Init::init();
$objResponse = $objApplication->bootstrap()->run();

