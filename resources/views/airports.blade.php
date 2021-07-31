<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{--    FORM CREATE||EDIT       --}}
<div class="col-md-4" style="float:left;padding: 0 20px">
    <form class="row g-3 needs-validation" novalidate
          @if($airport) action="{{url("/airport/update",['id'=>$airport->__get('id')])}}"
          @else action="{{url("/airport/save")}}"
          @endif  method="POST">
        @csrf
        <div class="col-md-2">
            <label for="validationCustom01" class="form-label">Code</label>
            <input name="code" @if($airport) placeholder="{{$airport->__get('code')}}" @endif type="text" class="form-control" id="validationCustom01"  required>

        </div>
        <div class="col-md-9">
            <label for="validationCustom02" class="form-label">Name</label>
            <input name="name" @if( $airport) placeholder="{{$airport->__get('name')}}" @endif type="text" class="form-control" id="validationCustom02"  required>

        </div>
        <div class="col-md-2">
            <label for="validationCustomUsername" class="form-label">City Code</label>
            <input name="cityCode" @if( $airport) placeholder="{{$airport->__get('cityCode')}}" @endif type="text" class="form-control" id="validationCustom02"  required>

        </div>
        <div class="col-md-9">
            <label for="validationCustomUsername" class="form-label">City Name</label>
            <input name="cityName" @if( $airport) placeholder="{{$airport->__get('cityName')}}" @endif type="text" class="form-control" id="validationCustom02"  required>

        </div>
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Country Code</label>
            <input name="countryCode" @if( $airport) placeholder="{{$airport->__get('countryCode')}}" @endif type="text" class="form-control" id="validationCustom02"  required>
        </div>
        <div class="col-md-8">
            <label for="validationCustomUsername" class="form-label">Country Name</label>
            <input name="countryName" @if( $airport) placeholder="{{$airport->__get('countryName')}}" @endif type="text" class="form-control" id="validationCustom02"  required>
        </div>

        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Time Zone</label>
            <input name="timezone" @if( $airport) placeholder="{{$airport->__get('timezone')}}" @endif type="number" class="form-control" id="validationCustom02"  required>
        </div>
        <div class="col-md-2">
            <label for="validationCustomUsername" class="form-label">Latitude</label>
            <input name="lat" @if( $airport) placeholder="{{$airport->__get('lat')}}" @endif type="number" step="any" class="form-control" id="validationCustom02"  required>
        </div>
        <div class="col-md-2">
            <label for="validationCustomUsername" class="form-label">Longitude</label>
            <input name="lon" @if( $airport) placeholder="{{$airport->__get('lon')}}" @endif type="number" step="any" class="form-control" id="validationCustom02"  required>
        </div>
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Number Airport</label>
            <input name="numAirports" @if( $airport) placeholder="{{$airport->__get('numAirports')}}" @endif type="number" min="1" class="form-control" id="validationCustom02"  required>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">@if ($airport) Update @else Add @endif</button>
            @if ($airport)<a class="btn btn-danger" href="{{url('/airport/cancel')}}">Cancel</a> @endif

        </div>
    </form>
</div>

{{--    TABLE SHOWN LIST AIRPORT        --}}
<div class="col-md-8" style="float:right;padding: 0 20px">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">code</th>
            <th scope="col">name</th>
            <th scope="col">cityName</th>
            <th scope="col">countryName</th>
            <th></th>
        </tr>
        </thead>
        @foreach($data as $rs)
        <tbody>
        <tr>
            <th scope="row">{{$rs->__get('code')}}</th>
            <td>{{$rs->__get('name')}}</td>
            <td>{{$rs->__get('cityName')}}</td>
            <td>{{$rs->__get('countryName')}}</td>
            <td>
                <a href="{{url("/airport/edit",["id"=>$rs->__get('id')])}}">Sửa</a>
                <a href="{{url("/airport/delete",["id"=>$rs->__get('id')])}}">Xóa</a>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>

    <div class="card-footer">
        {{$data->links()}}
    </div>
</div>

{{--        STYLE FOR PAGINATION        --}}
<style>
    .relative.z-0.inline-flex.shadow-sm.rounded-md a{
        text-decoration: none;
    }
    .flex.items-center.justify-between div:first-child{
        display: none;
    }
    .w-5{
        width: 50px;
    }
</style>
{{--        JS      --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>
</html>
