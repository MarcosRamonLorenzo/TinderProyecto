<section class="py-10 bg-w sm:py-16 lg:py-24 z-40 relative">
    <div class="container mx-auto">
        <h2 class="text-3xl font-light text-black sm:text-4xl lg:text-5xl">
            <?=$personas["infoPrincipal"]?>
        </h2>
        <p class="mb-20 text-lg text-gray-900"><?=$personas["masInfo"]?></p>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
            <?php foreach($personas["personas"] as $persona): ?>
                <a href="#" class="shadow-2xl relative">
                    <div class="h-full relative shadow-2xl shadow-green-900 overflow-hidden group">
                        <div class="absolute -bottom-10 group-hover:top-0 left-0 w-full h-full group-hover:bg-green-900 transition-all ease-in-out duration-500">
                            <div class="w-full h-full p-5 relative">
                                <div class="absolute bottom-0 group-hover:bottom-24 text-white text-left transition-all ease-in-out duration-500">
                                    <h2 class="text-2xl font-bold text-white mb-0 pb-1"><?=$persona["nombre"]?></h2>
                                    <p class="text-lg font-light text-white"><?=$persona["infoSecundaria"]?></p>
                                </div>
                            </div>
                        </div>
                        <img src="<?=$persona["imagen"]?>" class="w-full z-0 h-full object-fill example">
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
