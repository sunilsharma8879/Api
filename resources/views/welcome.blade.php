<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Corona Virus Api</title>       
    </head>
    <body>
        <div class="flex-center position-ref full-height">            

            <div class="content">
                <div class="title m-b-md">
                    Information
                </div>

                <div class="links">
                    <ul>
                        @foreach($data as $key=>$value)
                            <li>{{ $key }} :
                                @if(is_array($value))   
                                    
                                    {{ $value['value'] }}
                                    
                                @else
                                {{ $value }}    
                                @endif   
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
