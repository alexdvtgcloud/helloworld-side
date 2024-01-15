<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('venga vaaa %s!', $name);
