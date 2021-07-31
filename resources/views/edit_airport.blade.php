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
<div id="airport" class="col-md-9">
    <input class="col-md-2" placeholder="{{$airport->__get('code')}}"/>
    <input class="col-md-9" placeholder="{{$airport->__get('name')}}"/>
</div>
<div id="city" class="col-md-9">
    <input class="col-md-2" placeholder="{{$airport->__get('cityCode')}}"/>
    <input class="col-md-9" placeholder="{{$airport->__get('cityName')}}"/>
</div>
<div id="country" class="col-md-9">
    <input class="col-md-2" placeholder="{{$airport->__get('countryName')}}"/>
    <input class="col-md-9" placeholder="{{$airport->__get('countryCode')}}"/>
</div>
<div id="about_country" class="col-md-9">
    <input  class="col-md-2" placeholder="{{$airport->__get('timezone')}}"/>
    <input  class="col-md-2" placeholder="{{$airport->__get('lat')}}"/>
    <input  class="col-md-2" placeholder="{{$airport->__get('lon')}}"/>
    <input class="col-md-2" placeholder="{{$airport->__get('numAirports')}}"/>
    <input class="col-md-2" placeholder="{{$airport->__get('city')}}"/>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<style>
    div{
        float: none;
        margin: auto;
    }
</style>
</html>
