<?php
    $sTitle = "text-[50px] lg:text-[66px] font-romie mb-4 tracking-[3px]";
    $sInput = "border-b border-cor1 block w-full py-4 bg-transparent outline-0 tracking-[2px]";
    $sBtn = "text-[16px] drop-shadow-xl bg-[#FFF] rounded-[8px] text-center w-[150px]  py-[8px] tracking-[2px]"
?>
<section class="container mx-auto text-cor1 py-[36px]  border-t border-cor1 mt-[30px]">
    <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
        <div>
            <h3 class="<?php echo $sTitle; ?>">
                Click para <br />
                se inspirar
            </h3>
            <small class="text-[14px] lg:text-[18px] font-face tracking-[2px]">
                Assine a nossa newsletter <br />
                e não perca nenhuma novidade.
            </small>
        </div>
        <div>
            <input class="<?php echo $sInput; ?>" type="email" placeholder="EMAIL" required>
            <input class="<?php echo $sInput; ?>" type="text" placeholder="ASSUNTO" required>
            <input class="<?php echo $sInput; ?>" type="text" placeholder="MENSAGEM" required>
            <button class="<?php echo $sBtn; ?> mt-8 block lg:hidden font-face" type="submit">Enviar</button>
        </div>
        <div class="hidden lg:flex justify-center" >
            <button class="<?php echo $sBtn; ?> mt-[50px] ml-[50px] hover:bg-[#EE705A] hover:text-white transition-all h-[50px]" type="submit">Enviar </button>
        </div>
    </form>
</section>