<?php

namespace AppBundle;

class CapitalizationService
{
    public function capitalize($str) {
        return strtoupper($str);
    }
}