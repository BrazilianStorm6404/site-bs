@extends('layouts.app')

@section('content')
    <div class="container text-center" style="padding-top:15px">

        <h1>Apoio</h1>
        <div style="margin: 30px 0px;">
            <p class="text-justify" style="padding:5px">
                (insira texto fofinho aqui)
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Modi soluta, commodi quae quis tempora excepturi.
                Doloremque eius et, quidem quasi suscipit aliquid beatae vero vitae blanditiis. 
                Ipsum aspernatur quas reprehenderit?
            </p> 
            <div>               
                @foreach ($files as $file)
                    @if($loop->last)
                        @if ($loop->odd)
                            <div class="row justify-content-md-center align-items-center" style="margin:25px 0" >
                                <div class="col">
                                    <img src = "{{$file}}" style="max-width:45%; max-height:100%; " >
                                </div>
                            </div>
                        @endif

                        @if ($loop->even)
                                <div class="col">
                                    <img src = "{{$file}}" style="max-width:90%; max-height:100%; " >
                                </div>
                            </div>
                        @endif
                    @else
                        @if ($loop->odd)
                            <div class="row justify-content-md-center align-items-center" style="margin:25px 0" >
                                <div class="col">
                                    <img src = "{{$file}}" style="max-width:90%; max-height:100%; " >
                             </div>
                        @endif

                        @if ($loop->even)
                                <div class="col">
                                    <img src = "{{$file}}" style="max-width:90%; max-height:100%; " >
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
        <hr/>
        <div class="container" style="margin:10% 0">
            <h4>AJAPET</h4>
            <p class="text-justify" style="margin:15px 0px 30px 0px; padding:5px">
            (insira texto fofinho aqui, só que agora sobre a ajapet)
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Modi soluta, commodi quae quis tempora excepturi.
            Doloremque eius et, quidem quasi suscipit aliquid beatae vero vitae blanditiis. 
            Ipsum aspernatur quas reprehenderit?
            </p> 

            <img src = "storage/apoio/AJAPET.png" style="width:80%" >
        </div>
    </div>    
@endsection

