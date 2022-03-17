<div>
    <x-page-header title="Dashboard">
        <x-slot name="buttons">
            <x-button primary @click="$modals.show('modal-create-user')">Novo</x-button>
        </x-slot>
    </x-page-header>
    <script>
        window.$modals = {
            show(name) {
                window.dispatchEvent(
                    new CustomEvent('modal', {
                        detail: name
                    })
                );
            }
        }

        function splash() {
            return {
                initSplash() {
                    document.body.classList.add('overflow-hidden')
                    this.animate(this.$refs.slidecontainer, ['left-full', 'skew-x-12'], 'add', 1000,
                        () => this.animate(this.$refs.slidecontainer, ['skew-x-12'], 'remove', 400,
                            () => this.animate(this.$refs.logo, ['scale-150'], 'add', 500,
                                () => this.animate(this.$refs.textlogo, ['scale-100'], 'add', 500,
                                    () => setTimeout(() => window.location.href = "/home", 2500)
                                )
                            )
                        )
                    )
                },
                animate(element, classList, type, time, callback) {
                    setTimeout(() => {
                        if (type === 'add') {
                            element.classList.add(...classList)
                        } else {
                            element.classList.remove(...classList)
                        }
                        if (callback) {
                            callback()
                        }
                    }, time ? time : 4000)
                }
            }
        }
    </script>


</div>
