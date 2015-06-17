<?php

function test(): callable {
    return function (): array {
        $💚 = 10;
        $😊 = 15;

        return [
            false ?? 10,  // will be "false"
            true ?? 10,   // will be "true"
            null ?? 10,   // 10
            0 ?? 10,      // 0
            1 ?? 10,      // 1
            "\u{1F49A}",
            "\u{1f60a}",
            "\u{1f620}",
            $💚,
        ];
    };
}

try {
    var_dump( test()() );
    nonExistentFunction();
} catch (\EngineException $e) {
    var_dump($e);
}