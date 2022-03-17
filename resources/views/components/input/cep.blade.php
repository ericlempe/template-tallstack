<x-input type="text"
    {{ $attributes }}
    x-data="{}"
    x-init="
        new Cleave($el, {
            numericOnly: true,
            blocks: [5, 3],
            delimiters: ['-']
        });
    "/>
