<?php
echo "Loading " . __FILE__ . "\n";
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('TestSampleClass10.php')
    ->exclude('demos')
    ->in(__DIR__);
return Symfony\CS\Config\Config::create()
    ->finder($finder);