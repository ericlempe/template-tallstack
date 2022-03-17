@props(['label' => '', 'placeholder' => "Selecione", 'multiple' => false])

<div x-data="settings('{{ $placeholder }}', '{{ $multiple }}')" x-id="['input']">
    <label :for="$id('input')" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="relative mt-1">
        <input type="hidden" x-ref="valueSelected" {{ $attributes }}>
        <input
            type="text"
            x-on:keyup="search($el.value)"
            :id="$id('input')"
            :role="$id('input')"
            x-ref="textSelected"
            aria-controls="options"
            :placeholder="placeholder"
            aria-expanded="false"
            class="w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-12 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
        <button
            @click="open = !open"
            type="button"
            class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none">
            <x-icon icon="selector" class="h-5 w-5 text-gray-400"/>
        </button>
        <div x-ref="options" class="hidden">
            {{ $slot }}
        </div>
        <ul
            x-show="open"
            x-cloak
            class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
            x-ref="newOptions"
            role="listbox">
            <template x-if="options.count() > 0">
                <template x-for="option in options.all()" :key="option.value">
                    <li
                        x-on:click="checkSelected($el, option.value)"
                        x-id="['li']"
                        x-on:mouseover="mouseoverOption($el)"
                        x-on:mouseleave="mouseleaveOption($el)"
                        class="relative cursor-default select-none py-2 pl-8 pr-4 text-gray-900"
                        role="option"
                        tabindex="-1"
                    >
                        <span x-html="option.text" class="block truncate" :class="option.selected ? 'font-semibold' : ''"></span>
                        <span
                            x-show="option.selected"
                            class="absolute inset-y-0 left-0 flex items-center pl-1.5 text-indigo-600">
                            <x-icon icon="check" class="h-5 w-5"/>
                        </span>
                    </li>
                </template>
            </template>
        </ul>
    </div>
</div>

<script>
    function settings(placeholder, multiple) {
        return {
            open: false,
            options: collect(),
            optionsNotFiltered: collect(),
            optionsSelected: collect(),
            placeholder: placeholder,
            init() {
                let options = this.$refs.options.children;
                if (options.length > 0) {
                    Object.keys(options).forEach((key, i) => {
                        let option = {
                            value: options[key].value,
                            text: options[key].text,
                            selected: options[key].selected
                        };
                        this.options.push(option);
                        this.optionsNotFiltered.push(option);
                    });
                }
            },
            checkSelected(li, valueSelected) {
                if (multiple) {
                } else {
                    this.optionsNotFiltered.transform((item) => {
                        item.selected = item.value == valueSelected ? true : false;
                        return item;
                    });
                    this.open = false;
                    this.$refs.textSelected.value = this.optionsNotFiltered.firstWhere("value", valueSelected).text;
                    this.$refs.valueSelected.value = valueSelected;
                    this.options = this.optionsNotFiltered;
                }
            },
            search(value) {
                this.open = true;
                if (value.trim().length > 0) {
                    this.options = this.optionsNotFiltered.filter((v, i) => v.text.search(value) !== -1);
                    if (this.options.count() === 0) {
                        this.open = false;
                    }
                } else {
                    this.options = this.optionsNotFiltered;
                }
            },
            mouseoverOption(li) {
                li.classList.remove('text-gray-900');
                li.classList.add('text-white');
                li.classList.add('bg-indigo-600');
                let spans = li.getElementsByTagName("span");
                if (spans[1] !== undefined) {
                    spans[1].classList.remove('text-indigo-600');
                    spans[1].classList.add('text-white');
                }
            },
            mouseleaveOption(li) {
                li.classList.remove('text-white');
                li.classList.remove("bg-indigo-600")
                li.classList.add('text-gray-900');
                let spans = li.getElementsByTagName("span");
                if (spans[1] !== undefined) {
                    spans[1].classList.remove('text-white');
                    spans[1].classList.add('text-indigo-600');
                }
            },
        }
    }
</script>
