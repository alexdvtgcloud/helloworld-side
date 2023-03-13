<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Helo %s!', $name);
