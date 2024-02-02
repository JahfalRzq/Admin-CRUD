{{-- <style>
    @-webkit-keyframes scroll {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }

        100% {
            -webkit-transform: translateX(calc(-500px * 7));
            transform: translateX(calc(-500px * 7));
        }
    }

    @keyframes scroll {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }

        100% {
            -webkit-transform: translateX(calc(-500px * 7));
            transform: translateX(calc(-500px * 7));
        }
    }

    .slider {
        /* background: pr; */
        /* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125); */
        height: 200px;
        overflow: hidden;
        position: relative;
        margin-top: 5em;
        /* width: 960px; */
    }

    .slider::before,
    .slider::after {
        /* background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%); */
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }

    .slider::after {
        right: 0;
        top: 0;
        -webkit-transform: rotateZ(180deg);
        transform: rotateZ(180deg);
    }

    .slider::before {
        left: 0;
        top: 0;
    }

    .slider .slide-track {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(300px * 30);
    }

    .slider .slide {
        height: 160px;
        width: 160px;
    }
</style> --}}
{{-- <div class="slider">
    <div class="slide-track">
        <div class="slide">
            <img src="{{'images/image 39.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 40.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 41.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 42.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 43.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 44.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 45.png'}}" width="250" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/LOGO V.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/LOGO FPI.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 39.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 40.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 41.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 42.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 43.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 44.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 45.png'}}" width="250" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/LOGO V.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/LOGO FPI.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 39.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 40.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 41.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 42.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 43.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 44.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/image 45.png'}}" width="250" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/LOGO V.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
        <div class="slide">
            <img src="{{'images/LOGO FPI.png'}}" width="200" alt="" class="object-cover h-fit" />
        </div>
    </div>
</div> --}}
<div class="h-fit relative w-full grid place-items-center overflow-hidden slider mt-20">
    <div class="flex justify-between gap-20" style="animation: scroll 60s linear infinite; width: calc(700px * 20);">
        <div class="">
            <img src="{{'images/image 39.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 40.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 41.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 42.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 43.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 44.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/LOGO V.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/lOGO FPI.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 45.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 39.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 40.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 41.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 42.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 43.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 44.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/LOGO V.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/lOGO FPI.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 45.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 39.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 40.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 41.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 42.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 43.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 44.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/LOGO V.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/lOGO FPI.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 45.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 39.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 40.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 41.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 42.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 43.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 44.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/LOGO V.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/lOGO FPI.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
        <div class="">
            <img src="{{'images/image 45.png'}}" class="w-full h-32 object-cover" alt="" />
        </div>
    </div>
</div>
