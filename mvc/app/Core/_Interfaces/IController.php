<?php

/**
 * Created by PhpStorm.
 * User: ��������
 * Date: 17.02.2020
 * Time: 18:22
 */

namespace Core\_Interfaces;
interface IController
{
    public function render($template, array $vars=[]);
}