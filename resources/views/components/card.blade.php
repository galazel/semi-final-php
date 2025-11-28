<div class="border-2 p-5 rounded m-3 0 flex flex-col justify-center items-center">

    @isset($header)
        <div style="font-weight:bold; margin-bottom:10px;">
            {{ $header }}
        </div>
    @endisset

    <div>
        {{ $slot }}
    </div>

    @isset($footer)
        <div style="margin-top:15px; color:gray; font-size:14px;">
            {{ $footer }}
        </div>
    @endisset

</div>
