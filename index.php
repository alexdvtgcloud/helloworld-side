<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hellllo %s!', $name);
