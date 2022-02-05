<?php

namespace classes;

abstract class CommsManager
{
    abstract function getHeaderText();
    abstract function getAppEncoder();
    abstract function getFooterText();
}