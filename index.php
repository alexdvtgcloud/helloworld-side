<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Heello %s!', $name);
