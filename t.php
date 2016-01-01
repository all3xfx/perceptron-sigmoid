<?php
require __DIR__ . '/vendor/autoload.php';

$x = rand(-1, 1);
$y = rand(-1, 1);
$p = new P\Perceptron($x, $y);

$trainer = new P\Trainer();
$trainer->train($p);

echo "BELOW THE LINE -> " . $p->feedForward(2, 2) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(9, 9) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(0, -5) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(20, 5) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(0, -10) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(0, -1) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(0, 0) . PHP_EOL;
echo "BELOW THE LINE -> " . $p->feedForward(0, 2) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-100, 10) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-9, 0) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-9, 20) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-4, -4) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-10, -10) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-20, -10) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-20, -20) . PHP_EOL;
echo "ABOVE THE LINE -> " . $p->feedForward(-100, -100) . PHP_EOL;
