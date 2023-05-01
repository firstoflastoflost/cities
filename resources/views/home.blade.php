<html>
<head>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

<style>
    ul>li{
        cursor: pointer;
        text-decoration: underline;
    }
</style>
</head>
<ul>
    @foreach($cities as $city)
        <li>
            <a href="/{{$city->slug}}">{{$city->name}}</a>
        </li>
    @endforeach
</ul>


<script>
    $(document).ready(function(){

    });
</script>
</html>
