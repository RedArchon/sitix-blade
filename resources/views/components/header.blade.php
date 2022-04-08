<div class="custom w-full">
    <div class="text-center w-full">
        <p class="dark:text-white" style="font-size: 6rem">
            Magnanimus Tour
        </p>
    </div>
    <div class="w-full">
        <div class="flex items-center justify-center">
            <div class="flex self-end">
                <input type="text" class="rounded-l-lg px-4 py-2 w-80" placeholder="Email">
                <button class="flex rounded-r-lg items-center justify-center px-4 border-l c-background border-gray-200 dark:text-white">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</div>
<style>
    .custom {
        background-image: url("{{$slot}}");
        background-repeat: no-repeat;
        height: 30rem;
    }
    .c-background{
        background-color: #ec4949;
    }
</style>
