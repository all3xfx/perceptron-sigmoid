<?php
namespace P;

class Trainer
{
    public function train(Perceptron $p)
    {
        for ($i=-100000; $i<100000; $i++) {
            $x = rand(-100, 100);
            $y = rand(-100, 100);

            $answer = 1;
            if ($y < $this->f($x)) {
                $answer = -1;
            }

            $p->train($answer, $x, $y);
        }
    }

    private function f($x)
    {
        return (2*$x + 3);
    }
}
