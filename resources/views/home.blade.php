<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تست لاراول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: iransans;
            src: url('../font/IRANSans_Light.ttf');
        }
        .iransans{
            font-family: 'iransans';
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center iransans">سلام لاراول</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($data as $DA)
                <div class="col-lg-4 col-12">
                    <div class="card shadow shadow-lg">
                        <div class="card-body iransans" dir="rtl">
                            <h5 class="card-title text-center">{{ $DA->name_plan }}</h5>
                            <p>مقدار حجم:{{ $DA->data_tbl_2->volume_host }}</p>
                            <p>ترافیک ماهیانه :{{ $DA->data_tbl_2->traffic_host }}</p>
                            <p>رم : {{ $DA->data_tbl_2->ram_host }}</p>
                            <p>تعداد سفارشات: {{ $DA->data_tbl_3->num_order }}</p>
                            <p>قیمت ماهانه هاست :{{ $DA->data_tbl_2->price }}</p>

                            <div class="card-footer">
                                <button class="btn btn-primary w-100">ثبت سفارش</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
