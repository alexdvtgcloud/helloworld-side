<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('ya? %s!', $name);
