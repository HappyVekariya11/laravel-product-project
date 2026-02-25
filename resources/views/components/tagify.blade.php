@props(['required' => false ,'options' => [], 'url' => null, 'mode' => null, 'preload' =>false, 'label' => null, 'placeholder' => 'Type here', 'paramFn' => 'void(0)'])
@php
    $id = 'f' . md5(rand());
    $hasError = $errors->has($attributes->get('name'));

    $attributes = $attributes
        ->merge([
            'class' => $hasError

            ? 'border-red-400 focus:border-red-400 focus:ring-red-400 dark:border-red-400 dark:focus:border-red-400 dark:focus:ring-red-400'
            : 'border-secondary-600 hover:border-secondary-700 dark:border-dark-100 dark:hover:border-dark-100',
        ]);
@endphp

<div class="relative w-full group">
    <input x-init="$nextTick(() => { setTimeout(() => { {{ $id }}($el); }, 500) })"
       style="padding-top: 1rem;" 
       type="text" 
       {!! $attributes->merge([
           'class' =>
           'py-[7.5px] pr-12 peer block dark:bg-dark-600 border-secondary-600 hover:border-secondary-800 dark:border-dark-50 dark:hover:border-secondary-900 group-focus-within:border-primary-500 rounded-md shadow-sm appearance-none rounded focus:outline-none',
       ]) !!}
       placeholder="{{$placeholder}}" />


    @if ($label)
        <!-- <x-tagify-label :value="$label" class="tagify-label" /> -->
         <x-tagify-label :value="$label" :required="$required" class="tagify-label" />
    @endif

    <x-input-error :messages="$errors->get($attributes['name'])" class="mt-2" />

</div>


@push('scripts')
    <script>
        function {{$id}}($el) {
            let options = @json($options);
            let url = @js($url);
            let tagify = new Tagify($el, {
                enforceWhitelist: !!options.length,
                whitelist: options,
                addTagOnBlur: false,
                mode: @js($mode),
                tagTextProp: 'name',
                originalInputValueFormat: valuesArr => {
                    if(@js($mode) == 'select')
                    {
                        return valuesArr.length ? valuesArr[0].value : null;
                    }
                    else {
                        return '["' + valuesArr.map(item => item.value.replace(/"/g, '\\"')).join('","') + '"]';
                    }
                },
                dropdown: {
                    mapValueTo: 'name',
                    searchKeys : ['name'],
                    maxItems: options? 10 : 5, // <- mixumum allowed rendered suggestions
                    classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                    enabled: 0, // <- show suggestions on focus
                    closeOnSelect: true, // <- do not hide the suggestions dropdown once an item has been selected
                    dropdownItemNoMatch: data =>
                        `<div value="noMatch" tagifySuggestionIdx="999" tabindex="0" role="option">
                            No suggestion found for: <strong>${data.value}</strong>
                        </div>`
                }
            });


            function suggest(value, noshow){
                if (url) {
                    tagify.whitelist = null // reset the whitelist

                    // show loading animation and hide the suggestions dropdown
                    tagify.loading(true).dropdown.hide()

                    axios.get(`${url}?search=` + value,{
                        params : {{$paramFn}}
                    })
                        .then(function(response) {
                            tagify.whitelist = response.data // update whitelist Array in-place
                            tagify.loading(false);
                            if(!noshow)
                            {
                                tagify.dropdown.show(value) // render the suggestions dropdown
                            }
                        });
                }
            }

            tagify.on('input', function onInput(e) {
                suggest(e.detail.value);
            });

            if(@js($preload))
            {
                suggest('',true);
            }

            // if($el._x_model)
            // {
            //     tagify.addTags(JSON.parse($el._x_model.get()));
            // }

            tagify.DOM.input.addEventListener('paste', function (event) {
                const clipboardData = event.clipboardData || window.clipboardData; // For compatibility
                const pastedText = clipboardData.getData('text'); // Get plain text from clipboard

                console.log(pastedText)
                if (pastedText) {
                    suggest(pastedText);
                }
            });

            window.tagifyCommon.bindTagifyControl(tagify);
        };
    </script>
@endpush
