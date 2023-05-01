<html>
<head>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

<style>
    ul>li{
        cursor: pointer;
        text-decoration: underline;
    }
    .link_selected{
        text-decoration: none;
    }
    .link_selected > a{
        color: #ef4444;
        text-decoration: none;
    }
</style>
</head>

<ul>
    @foreach($cities as $city)
        @php ($isSelectedCity = ($city->slug === $selected_city) )
        <li
            @if($isSelectedCity)
                class="link_selected"
            @endif >
            <a href="/{{$city->slug}}">
                {{$city->name}}
            </a>
        </li>
    @endforeach
</ul>

</html>
