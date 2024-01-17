<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('no te flipes %s!', $name);
