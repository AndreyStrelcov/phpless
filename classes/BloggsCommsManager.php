<?php

namespace classes;

class BloggsCommsManager
{
    function getHeaderText()
    {
        return "BloggsCal верхний колонтинул\n";
    }

    function getAppEncoder()
    {
        return new BloggsAppEncoder();
    }

    function getFooterText()
    {
        return "BloggsCal нижний колонтинул\n";
    }
}