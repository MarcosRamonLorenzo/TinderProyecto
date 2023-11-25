<div class="px-4 bg-white mb-8 py-8 rounded-3xl mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
    <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
        <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
            <div class="max-w-xl mb-6">

                <h2 class="font-sans text-3xl sm:mt-0 mt-6 font-medium tracking-tight text-black sm:text-4xl sm:leading-none max-w-lg mb-6">
                   <?=$mensajes["mensaje1"]["titulo"]?>
                </h2>
                <p class="text-black text-base md:text-lg"> <?=$mensajes["mensaje1"]["info"]?>
                </p>
            </div>
            <div className='space-x-4'>
                <button class="text-neutral-800  text-lg font-medium inline-flex items-center">
                    <span> get insights →</span>
                </button>
            </div>
        </div>
        <img alt="logo" width="420" height="120" src=" <?=$mensajes["mensaje1"]["img"]?>" />
    </div>
</div>




<div class="px-4 bg-white mb-8 py-8 rounded-3xl mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
    <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">

        <img alt="logo" width="420" height="120" src="<?=$mensajes["mensaje2"]["img"]?>" />


        <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">

            <div class="max-w-xl mb-6">

                <h2 class="font-sans text-3xl sm:mt-0 mt-6 font-medium tracking-tight text-black sm:text-4xl sm:leading-none max-w-lg mb-6">
                    <?=$mensajes["mensaje2"]["titulo"]?>
                </h2>
                <p class="text-black text-base md:text-lg"><?=$mensajes["mensaje2"]["info"]?>

                </p>
            </div>
            <div className='space-x-4'>
                <button class="text-neutral-800  text-lg font-medium inline-flex items-center">
                    <span> see jobs →</span>
                </button>
            </div>
        </div>
    </div>
</div>



</div>