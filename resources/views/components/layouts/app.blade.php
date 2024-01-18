<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Visitor KAI' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    @livewireStyles
</head>

<body>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @livewireScripts

    <script>
        Livewire.on('success', data => {
            Swal.fire({
                title: 'Berhasil!',
                text: data[0].pesan,
                icon: 'success',
                confirmButtonText: 'OK'
            })
        })
        Livewire.on('error', data => {
            Swal.fire({
                title: 'Gagal!',
                text: data[0].pesan,
                icon: 'error',
                confirmButtonText: 'OK'
            })
        })
        Livewire.on('del_confirm', id => {
            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Data ini akan di hapus permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya"
            }).then((result) => {
                if (result[0].value) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: result[0].pesan,
                        icon: "success"
                    });
                }
            });
        })
        Livewire.on('success1', data => {
            console.log(data[0].pesan)
            var alert_success = document.getElementById('alert-success')
            var alertShow = bootstrap.Modal.getOrCreateInstance(alert_success)
            document.getElementById('message-success').innerHTML = data[0].pesan
            alertShow.show()
        })
    </script>
</body>

</html>
