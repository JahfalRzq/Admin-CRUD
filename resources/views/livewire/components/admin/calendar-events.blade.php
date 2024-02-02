<div class="antialiased bg-transparent">
    <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
        <div class="container mx-auto px-4 py-2 md:py-8">
            <div class="bg-transparent rounded-lg overflow-hidden">
                <div class="flex items-center justify-between py-2 px-6">
                    <button type="button"
                        class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-blue-200 p-1 items-center"
                        :class="{ 'cursor-not-allowed opacity-25': month == 0 }" :disabled="month == 0 ? true : false"
                        @click="month--; getNoOfDays()">
                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <div>
                        <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                        <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                    </div>
                    <button type="button"
                        class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-blue-200 p-1"
                        :class="{ 'cursor-not-allowed opacity-25': month == 11 }" :disabled="month == 11 ? true : false"
                        @click="month++; getNoOfDays()">
                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <div class="mx-1 mb-1">
                    <div class="grid grid-flow-col" style="margin-bottom: -40px;">
                        <template x-for="(day, index) in DAYS" :key="index">
                            <div style="width: 14.26%" class="px-2 py-2 mr-[1.5px]">
                                <div x-text="day"
                                    class="text-gray-900 text-sm uppercase tracking-wide font-bold text-left"></div>
                            </div>
                        </template>
                    </div>

                    <div class="overflow-auto">
                        <div class="flex flex-wrap mt-10 w-80 whitespace-nowrap md:w-full">
                            <template x-for="blankday in blankdays">
                                <div style="width: 14.28%;" class="text-center border px-5 py-5 my-1 rounded-lg"></div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%;" class="relative">
                                    <div @click="showEventModal(date)" x-text="date"
                                        class="inline-flex w-6 h-6 px-5 py-5 my-1 items-center justify-center cursor-pointer text-center leading-none rounded-lg transition ease-in-out duration-100 border border-gray-300"
                                        :class="{ 'bg-blue-500 text-white': isToday(date) ==
                                            true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }">
                                    </div>
                                </div>
                                <div class="overflow-y-auto mt-1">
                                    <div class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
                                        x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                        x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length">
                                    </div>
    
                                    <template
                                        x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                        <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden "
                                            :class="{
                                                'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme ===
                                                    'yellow',
                                                'border-green-200 text-green-800 bg-green-100': event.event_theme ===
                                                    'green',
                                                'border-purple-200 text-purple-800 bg-purple-100': event.event_theme ===
                                                    'purple'
                                            }">
                                            <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 justify-between w-full items-center ml-2 mt-10">
                    <div class="flex flex-col text-sm font-semibold" style="font-family: gilroy-reguler">
                        <div id="dateEvent" class="mb-2"></div>
                        <div id="eventTitle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div style=" background-color: rgba(0, 0, 0, 0.8)"
            class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
            <div class="p-4 max-w-xl mx-auto  absolute left-0 right-0 overflow-hidden mt-24">
                <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                    x-on:click="openEventModal = !openEventModal">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">

                    <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add Event Details</h2>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event title</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" x-model="event_title">
                    </div>

                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event date</label>
                        <input
                            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                            type="text" x-model="event_date" readonly>
                    </div>

                    <div class="mt-8 text-right">
                        <button type="button"
                            class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2"
                            @click="openEventModal = !openEventModal">
                            Cancel
                        </button>
                        <button type="button"
                            class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm"
                            @click="addEvent()">
                            Save Event
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal -->
    </div>

    <script>
        const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'];
        const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        function app() {
            return {
                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],
                days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                events: [{
                        event_date: new Date(2022, 10, 10),
                        event_title: "April Fool's Day",
                        event_theme: 'blue'
                    },

                    {
                        event_date: new Date(2023, 02, 10),
                        event_title: "Birthday",
                        event_theme: 'red'
                    },

                    {
                        event_date: new Date(2022, 10, 16),
                        event_title: "Upcoming Event",
                        event_theme: 'green'
                    }
                ],
                event_title: '',
                event_date: '',
                event_theme: 'blue',

                themes: [{
                        value: "blue",
                        label: "Blue Theme"
                    },
                    {
                        value: "red",
                        label: "Red Theme"
                    },
                    {
                        value: "yellow",
                        label: "Yellow Theme"
                    },
                    {
                        value: "green",
                        label: "Green Theme"
                    },
                    {
                        value: "purple",
                        label: "Purple Theme"
                    }
                ],

                openEventModal: false,

                initDate() {
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                    this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                },

                isToday(date) {
                    const today = new Date();
                    const d = new Date(this.year, this.month, date);

                    return today.toDateString() === d.toDateString() ? true : false;
                },

                showEventModal(date) {
                    // open the modal
                    this.openEventModal = true;
                    this.event_date = new Date(this.year, this.month, date).toDateString();
                },

                addEvent() {
                    if (this.event_title == '') {
                        return;
                    }

                    this.events.push({
                        event_date: this.event_date,
                        event_title: this.event_title,
                        event_theme: this.event_theme
                    });

                    console.log(this.events);
                    document.getElementById("eventTitle").innerHTML = this.event_title;
                    document.getElementById("dateEvent").innerHTML = this.event_date;

                    // clear the form data
                    this.event_title = '';
                    this.event_date = '';
                    this.event_theme = '';

                    //close the modal
                    this.openEventModal = false;
                },

                getNoOfDays() {
                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                    // find where to start calendar day of week
                    let dayOfWeek = new Date(this.year, this.month + 3, 0).getDay();
                    let blankdaysArray = [];
                    for (var i = 1; i <= dayOfWeek; i++) {
                        blankdaysArray.push(i);
                    }

                    let daysArray = [];
                    for (var i = 1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.blankdays = blankdaysArray;
                    this.no_of_days = daysArray;
                }
            }
        }
    </script>
</div>
