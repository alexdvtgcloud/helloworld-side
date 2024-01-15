<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello babe %s!', $name);
