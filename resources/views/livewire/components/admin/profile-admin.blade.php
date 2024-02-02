<div class="p-10 my-6" style="font-family: gilroy-reguler;">
    <img src="../../{{ auth()->user()->image }}" alt="" class="w-20 mx-auto">
    <div class="mt-7 space-y-1">
        <h1 class="font-semibold text-center text-lg">{{ auth()->user()->user_name }}</h1>
        <h1 class="font-semibold text-center text-sm text-gray-600">{{ auth()->user()->position->position_name}}</h1>
        <h1 class="font-semibold text-center text-base text-gray-600">{{auth()->user()->nip ?? ''}}-{{auth()->user()->nip2 ?? ''}}</h1>
    </div>
    <hr class="bg-gray-300 h-0.5 mt-7">
    <div class="mt-7 flex text-sm font-semibold justify-center xl:justify-start">
        <div class="flex flex-col space-y-4 text-gray-500 mr-6">
            <h1>Email</h1>
            <h1>Phone</h1>
            <h1>Division</h1>
            <h1>Office</h1>
            <h1>Role</h1>
        </div>
        <div class="flex flex-col space-y-4">
            <h1>{{ auth()->user()->email }}</h1>
            <h1>{{ auth()->user()->phone }}</h1>
            <h1>{{ auth()->user()->division->division_name }}</h1>
            <h1>{{ auth()->user()->office->office_name }}</h1>
            <h1>{{ auth()->user()->role->role_name }}</h1>
        </div>
        <div class="absolute grid grid-cols-1 justify-center items-center mt-48
                    sm:grid-cols-2 sm:space-x-3
                    md:space-x-6 md:w-72 md:justify-center
                    xl:w-60">
            <a href="/profileDashboard" class="w-full px-4 py-2 bg-gradient-to-r from-[#0398EC] to-[#046CB4] hover:from-[#046CB4] hover:to-[#0398EC] rounded-lg text-base text-white tracking-wide font-medium">
                View Profile
            </a>
            <a href="/editProfileDashboard/{{ auth()->user()->id }}" class="w-full px-4 py-2 bg-transparent border-2 border-gray-400 text-gray-500 hover:bg-gray-400 hover:text-white hover:duration-300 rounded-lg text-base mt-3 sm:mt-0 font-medium">
                Edit Profile
            </a>
        </div>
    </div>
</div>
