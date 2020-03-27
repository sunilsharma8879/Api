<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Corona Virus Api</title>       
    </head>
    <body>
        <div class="flex-center position-ref full-height">            

            <div class="content">
                <div class="container text-center">
                    <h2>India Coronavirus Information</h2>
                </div>

                <div class="container">
                    <ul>
                        @foreach($data as $key=>$value)
                            <li>{{ ucfirst($key) }} :
                                @if(is_array($value))   
                                    
                                    {{ $value['value'] }}
                                    
                                @else
                                {{ date ( "Y-m-d H:i:s" , strtotime ( $value )) }}    
                                @endif   
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
