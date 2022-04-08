<div class="custom w-full">
    <div class="w-full">
        <div class="flex items-center justify-start">
            <p class="text-white text-2xl nfl">NFL</p>
        </div>
    </div>
    <div class="w-full">
        <img class="mx-auto" id="ny" src="{{asset('storage/ny.png')}}" alt="ny">
    </div>
</div>
<style>
    .custom {
        background-image: url("{{$slot}}");
        background-repeat: no-repeat;
        height: 30rem;
    }

    .nfl {
        padding-left: 8rem;
        padding-top: 8rem;
        font-size: 8rem;
    }
    #ny{
        width: 30rem;
    }
</style>
