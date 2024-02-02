<div class="card w-full p-6 rounded-lg bg-white" style="font-family: gilroy-reguler">
    <div class="flex justify-between items-center">
        <h1 class="text-lg font-semibold">Like Statistics</h1>
        <div class="flex space-x-4 items-center">
            <h1 class="text-[#0298DD]">{{$like}} Likes</h1>
            <span class="justify-center"><i class="bx bx-down-arrow-alt p-0.5 rounded-full text-white bg-[#0298DD] mr-1"></i> <span class="font-semibold">5.9%</span> from last week</span>
        </div>
    </div>
    <div>
        <canvas id="likeStats" class="w-full"></canvas>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- {{dd($like_date)}}

<script>
    const chartLikes = document.getElementById("likeStats");
    const char = new Chart(chartLikes,{
            type: "line",
            data: {
                labels: {!! $like_date !!},
                datasets: [{
                    borderColor: "#0298DD",
                    data: {!! $like_stats !!},
                    fill: false,
                    pointBackgroundColor: "#0298DD",
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
