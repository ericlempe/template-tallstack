<x-input type="text"
         {{ $attributes }}
         x-data="{}"
         x-init="
        new Cleave($el, {
            date: true,
    delimter: '/',
    datePattern: ['d', 'm', 'Y']
        });
    "/>
