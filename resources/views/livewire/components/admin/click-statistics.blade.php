<div class="card md:w-full p-6 rounded-lg bg-white" style="font-family: gilroy-reguler">
    <div class="flex justify-between items-center">
        <h1 class="text-lg font-semibold">Click Statistics</h1>
        <div class="flex space-x-4 items-center">
            <h1 class="text-[#F97316]">{{$click}} Clicks</h1>
            <span class="justify-center"><i class="bx bx-up-arrow-alt p-0.5 rounded-full text-white bg-[#F97316] mr-1"></i> <span class="font-semibold">10.9%</span> from last week</span>
        </div>
    </div>
    <div>
        <canvas id="clickStats" class="w-full"></canvas>
    </div>
</div>

{{-- <script>
    const chartClicks = new Chart(document.getElementById("clickStats"), {
            type: "line",
            data: {
                labels: ["Sun-28", "Mon-29", "Tue-30", "Wed-31", "Thu-1", "Fri-2", "Sat-3"],
                datasets: [{
                    borderColor: "#F97316",
                    data: [500, 400, 900, 300, 200, 500, 230],
                    fill: false,
                    pointBackgroundColor: "#F97316",
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
