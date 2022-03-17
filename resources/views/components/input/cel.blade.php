<x-input type="text"
    {{ $attributes }}
    x-data="{}"
    x-init="
        new Cleave($el, {
            numericOnly: true,
            blocks: [0, 2, 5, 4],
            delimiters: ['(', ')', '-']
        });
    "/>
