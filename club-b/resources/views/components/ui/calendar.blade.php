
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<div
    x-data="{
        value: ['2022/01/01', '2022/01/10'],
        init() {
            let picker = flatpickr(this.$refs.picker, {
                mode: 'range',
                dateFormat: 'Y/m/d',
                defaultDate: this.value,
                onChange: (date, dateString) => {
                    this.value = dateString.split(' to ')
                }
            })

            this.$watch('value', () => picker.setDate(this.value))
        },
    }"
    class="max-w-sm w-full"
>
    <div class="mb-2 font-bold mt-4">Deliver on...</div>

    <input class="w-full rounded-md border border-gray-200 px-3 py-2.5" x-ref="picker" type="text">
</div>