<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello babyyyyy %s!', $name);
