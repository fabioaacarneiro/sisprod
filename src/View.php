<?php

namespace Src;

final class View
{

    public static function render(string $page, array $data = [])
    {
        extract($data);
        return include documentRoot("app/Views/pages/$page.php");
    }
}
