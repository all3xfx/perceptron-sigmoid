<?php
namespace P;

class Perceptron
{
    const BIAS = -1;
    const LEARNING_CONSTANT = 0.1;
    private $weights;

    public function __construct(...$weights)
    {
        $this->weights = $weights;
    }

    public function feedForward(...$inputs)
    {
        $sum = 0;
        for ($i=0; $i<count($this->weights); $i++) {
            $sum += ($this->normalize($inputs[$i]) * $this->weights[$i]);
        }

        $sum -= self::BIAS;

        $sigma = 1 / (1 + exp(-$sum));

        return $this->activate($sigma);
    }

    private function normalize($input)
    {
        $data = (($input+100)/200);
        return $data;
    }

    public function train($desired, ...$inputs)
    {
        $guess = call_user_func_array([$this, "feedForward"], $inputs);
        $error = $desired - $guess;

        for ($i=0; $i<count($this->weights); $i++) {
            $this->weights[$i] += self::LEARNING_CONSTANT * $error * $this->normalize($inputs[$i]);
        }
    }

    private function activate($sum)
    {
        if ($sum > 0.5) {
            return 1;
        } else {
            return -1;
        }
    }
}
