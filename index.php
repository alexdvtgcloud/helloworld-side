<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('xfa %s!', $name);
