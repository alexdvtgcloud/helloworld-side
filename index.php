<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello papa %s!', $name);
