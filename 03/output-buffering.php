<?php

ob_start();

echo "hello";
echo "World";

ob_clean();

ob_flush();