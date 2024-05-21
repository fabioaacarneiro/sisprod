<?php

return [
    "/" => "Home@index",
    "/contact" => "Contact@index",
    "/product" => "Product@index",
    "/product/([0-9]+)" => "Product@findById",
    "/product/store" => "Product@store",
];
