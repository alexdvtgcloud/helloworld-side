<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello baby %s!', $name);
