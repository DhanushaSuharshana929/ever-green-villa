<div class="full-row p-0">
    <div id="slider-full" class="overflow_hidden" style="width:1200px;height:100vh;margin:0 auto;margin-bottom: 0px;"> 
        <!-- Slide 1-->
        <?php
        $SLIDER = new Slider(NULL);
        foreach ($SLIDER->all() as $slider) {
            ?>

        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:8000; transition2d:3; timeshift:-500; deeplink:home; kenburnszoom:in; kenburnsrotate:0; kenburnsscale:1.1; parallaxevent:scroll; parallaxdurationmove:500;"> <img width="1920" height="1080" src="upload/slider/<?php echo $slider['image_name'] ?>" class="ls-bg" alt="" />
                <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:700px; font-family:Montserrat; font-size:60px; line-height:70px; top:590px; left:42px; white-space:normal;" class="ls-l text-primary" data-ls="showinfo:1; delayin:350; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;"><?php echo $slider['title'] ?></p>
                <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:370px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:550; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;"></p>
                <p style="font-weight:800; text-align:left ;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); width:800px; font-family:Montserrat; font-size:60px; line-height:80px; top:450px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:750; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;"></p>
                <p style="font-weight:600; text-align:left; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);width:700px; font-family:Oleo Script; font-size:30px; line-height:50px; top:530px; left:42px; white-space:normal;" class="ls-l text-white" data-ls="showinfo:1; delayin:150; offsetyin:40lh; clipin:0 0 100% 0; offsetyout:40lh; clipout:0 0 100% 0; durationout:400;">Welcome To </p>
            </div>
            <?php
        }
        ?>
    </div>
</div>