<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('tal %s!', $name);
