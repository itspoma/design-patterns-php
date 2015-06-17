<?php
$output = new OutputPatterns;
echo $output->getStyles();

foreach ((new Patterns)->list() as $name) {
    echo $output->formatPatternHtml($name);
}

die;

//

/**
 *
 */
class Patterns {

    /**
     *
     * @iteratable
     */
    public function list(): Iterator {
        foreach (glob('*', GLOB_ONLYDIR) as $directoryName) {
            yield $directoryName;
        }
    }
}

/**
 *
 */
class OutputPatterns {
    
    /**
     *
     * @return string
     */
    public function getStyles(): string {
        $styles = [
            'body { text-align:center; font:14px verdana; }',
            '.directory, .directory * { transition: all 0.2s ease; }',
            '.directory { display:inline-block; vertical-align:top; background:#F5F5F5; margin:0px 5px 5px 0px; }',
            '.directory a { text-decoration:none; }',
            '.directory img { padding:0px 15px 10px; }',
            '.directory .title { display:block; padding:10px; text-align:center; background:#e5e5e5; color:#525252; text-decoration:none; }',
            '.directory:hover { background:#BEBEBE; }',
            '.directory:hover .title { background:#989898; color:#fff; }',
        ];

        return sprintf('<style>%s</style>', join('', $styles));
    }

    /**
     *
     * @param string $name
     * @return string
     */
    public function formatPatternHtml(string $name): string {
        $html = [
            '<div class="directory">',
            sprintf("<a href='/%s'>", $name, $name),
            sprintf('<span class="title">%s</span><br/>', $name),
            sprintf('<img src="/%s/diagram.png" width=300 />', $name),
            '</a>',
            '</div>',
        ];

        return join('', $html);
    }
}