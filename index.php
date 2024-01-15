<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('testeo %s!', $name);
