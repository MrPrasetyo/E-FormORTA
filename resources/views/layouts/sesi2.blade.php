<style>
.grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-row-gap: 0px;
    justify-content: center;
}

.grid-item {
    text-align: center;
}

.ctn-1 {
    font-size: clamp(20px , 5vw, 40px)
}

.ctn-2 {
    font-size: clamp(40px , 5vw, 80px)
}

</style>

<div class="grid-container pt-[30px] lg:pt-[60px] sm:pt-[30px] items-center">
    <div class="grid-item">
        <p class="ctn-1 text-white font-semibold lg:text-[40px] sm:text-[20px]">Total Anak Yatim Piatu</p>
    </div>
    <div class="grid-item">
        <p class="ctn-1 text-white font-semibold lg:text-[40px] sm:text-[20px]">Orang Tua yang Ingin mengasuh</p>
    </div>
    <div class="grid-item">
        <p class="ctn-2 text-white font-bold lg:text-[80px] sm:text-[40px]" id="count1">0</p>
    </div>
    <div class="grid-item">
        <p class="ctn-2 text-white font-bold lg:text-[80px] sm:text-[40px]" id="count2">0</p>
    </div>
</div>

<script>
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    var count1 = 0;
    var count2 = 0;
    var target1 = 1000;
    var target2 = 1000;
    var increment = 10;

    function updateCounters() {
        if (isElementInViewport(document.getElementById('count1')) && count1 < target1) {
            count1 += increment;
            document.getElementById('count1').textContent = count1;
        }

        if (isElementInViewport(document.getElementById('count2')) && count2 < target2) {
            count2 += increment;
            document.getElementById('count2').textContent = count2;
        }
    }

    function startCounter() {
        setInterval(updateCounters, 1);
    }

    window.addEventListener('load', startCounter);
</script>
