<footer>
    <div class="footer-bg-color footer-pad flex flex-col">
        <div class="w-full flex place-content-center mb-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="">
                    <img src="{{asset('storage/appstore.jpeg')}}" alt="appstore">
                </div>
                <div>
                    <img src="{{asset('storage/googleplay.jpeg')}}" alt="googleplay">
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex items-center justify-center">
                <div class="flex self-end">
                    <input type="text" class="rounded-l-lg px-4 py-2 w-80" placeholder="Email">
                    <button
                        class="flex rounded-r-lg items-center justify-center px-4 border-l c-background border-gray-200 dark:text-white">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>

        <div class="w-full text-center dark:text-white">
            <p>Powered By</p>
            <p>Venmo</p>
            <p>About | Support | Terms And Conditions</p>
            <p>Copyright © 2020 SI Tickets | All Rights Reserved</p>
        </div>
    </div>
</footer>
<style>
    .footer-pad {
        padding: 4rem;
    }

    .footer-bg-color {
        background-color: #3a3939;
    }
</style>
