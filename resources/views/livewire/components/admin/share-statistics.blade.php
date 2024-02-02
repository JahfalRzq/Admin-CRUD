<div class="card w-full p-6 rounded-lg bg-white" style="font-family: gilroy-reguler">
    <div class="flex justify-between items-center">
        <h1 class="text-lg font-semibold">Share Statistics</h1>
        <div class="flex space-x-4 items-center">
            <h1 class="text-[#22C55E]">{{$article}} Share </h1>
            <span class="justify-center"><i class="bx bx-down-arrow-alt p-0.5 rounded-full text-white bg-[#22C55E] mr-1"></i> <span class="font-semibold">5.9%</span> from last week</span>
        </div>
    </div>
    <div>
        <canvas id="shareStats" class="w-full"></canvas>
    </div>
</div>

{{-- <script>
    const chartShares = new Chart(document.getElementById("shareStats"), {
            type: "line",
            data: {
                labels: ["Sun-28", "Mon-29", "Tue-30", "Wed-31", "Thu-1", "Fri-2", "Sat-3"],
                datasets: [{
                    borderColor: "#22C55E",
                    data: [500, 400, 900, 300, 200, 500, 230],
                    fill: false,
                    pointBackgroundColor: "#22C55E",
                    borderWidth: "3",
                    pointBorderWidth: "4",
                    pointHoverRadius: "6",
                    pointHoverBorderWidth: "8",
                    pointHoverBorderColor: "rgb(74,85,104,0.2)",
                }],
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        display: false
                    },
                    x: {
                        display: true
                    },
                },
            },
        });
</script> --}}
