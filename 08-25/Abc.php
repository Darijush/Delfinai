<?php


class Abc extends C
{

    use A;
    // use A,B{
    //     A::read insteadof B;
    //     B::read as readA;
    // }

    public function read()
    {
        return 'ABC';
    }
}
