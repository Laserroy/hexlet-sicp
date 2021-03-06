<?php

return [
    'title' => "Instruction counting",
    'description' =>
        "Add instruction counting to the register machine simulation. That is, have the machine model keep track of the number of instructions executed. " .
        "Extend the machine model's interface to accept a new message that prints the value of the instruction count and resets the count to zero.",
];
