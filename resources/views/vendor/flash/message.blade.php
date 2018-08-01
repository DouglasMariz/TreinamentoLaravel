@push('scripts')
    <script>
                @foreach (session('flash_notification', collect())->toArray() as $message)

        var message = "{{ $message['message'] or '' }}"
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "progressBar": false,
            "preventDuplicates": false,
            "positionClass": "toast-top-center",
            "onclick": null,
            "showDuration": "600",
            "hideDuration": "1000",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @switch($message['level'])
            @case("success")
                toastr.success(message, 'Sucesso!');
            @break;
            @case("warning")
                toastr.warning(message, 'Atenção!');
            @break;
            @case("danger")
                toastr.error(message, 'Erro!');
            @break;
            @case("info")
                toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-top-center",
                    "hideDuration": "4000",
                    "timeOut": "4000",
                    "extendedTimeOut": "3000",
                };
                toastr.info(message, 'Aviso!');
            @break;
        @endswitch

        @endforeach
        {{ session()->forget('flash_notification') }}
    </script>
@endpush