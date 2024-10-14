<x-layout>
    <ol class="flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                href="#">
                Dashboard
            </a>
            <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
            </svg>
        </li>
    </ol>

    <!-- Grid -->
    <div class="grid grid-cols-7 gap-4">
        <!-- Card -->
        <div class="col-span-3 flex flex-col justify-center bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-clock text-gray-500 shrink size-5">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                </div>

                <div class="grow flex items-center">
                    <div class="relative w-full flex flex-col text-start text-2E335B">
                        <p id="time" class="text-2xl font-medium"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col-span-2 flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-presentation text-gray-500 shrink-0 size-5">
                        <path d="M2 3h20" />
                        <path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3" />
                        <path d="m7 21 5-5 5 5" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total classes
                        </p>
                        <div class="hs-tooltip">
                            <div class="hs-tooltip-toggle">
                                <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                    <path d="M12 17h.01" />
                                </svg>
                                <span
                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                    role="tooltip">
                                    The number of classes in the system
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800">
                            {{ $totalClasses }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col-span-2 flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users shrink-0 size-5 text-gray-500">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-gray-500">
                            Total Students
                        </p>
                        <div class="hs-tooltip">
                            <div class="hs-tooltip-toggle">
                                <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                    <path d="M12 17h.01" />
                                </svg>
                                <span
                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                                    role="tooltip">
                                    The number of students in the system
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl font-medium text-gray-800">
                            {{ $totalStudents }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->


    </div>


    <!-- Grid -->
    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-5 relative p-6 bg-['#F0F4F8'] border border-gray-200 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Step-by-Step Guide for Using the App</h1>
            <div class="hs-accordion-group">
                <div class="hs-accordion hs-accordion-active:border-gray-200  bg-['#F0F4F8'] border border-transparent rounded-xl"
                    id="hs-active-bordered-heading-one">
                    <button
                        class="hs-accordion-toggle hs-accordion-active:text-['#2E335B'] inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                        aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-one">
                        Step 1: Home Dashboard
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-one"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-active-bordered-heading-one">
                        <div class="pb-4 px-5">
                            <p class="text-['#2E335B']">
                                The Home Dashboard is the main landing page of the app. It provides an overview of the
                                application, including:
                            </p>
                            <ul class="list-disc list-inside pl-5 mt-2">
                                <li>A summary of recent activities</li>
                                <li>Quick access to various sections of the app</li>
                                <li>Links to manage classes and students</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 active bg-white border border-transparent rounded-xl"
                    id="hs-active-bordered-heading-two">
                    <button
                        class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                        aria-expanded="true" aria-controls="hs-basic-active-bordered-collapse-two">
                        Step 2: View and Manage Classes
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-two"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-active-bordered-heading-two">
                        <div class="pb-4 px-5">
                            <p class="text-gray-800">
                                To view and manage classes:
                            </p>
                            <ol class="list-decimal list-inside pl-5 mt-2">
                                <li>Navigate to the "Classes" page from the dashboard.</li>
                                <li>Here, you can see a list of all classes with details such as "Jenjang," "Program
                                    Studi,"
                                    "Fakultas," "Tahun Masuk," and "Kode Kelas."</li>
                                <li>You can add new classes using the "Add Class" button.</li>
                                <li>Edit existing classes by clicking the "Edit" button next to each class.</li>
                                <li>Use the "View" button to see more details about a class.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl"
                    id="hs-active-bordered-heading-three">
                    <button
                        class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                        aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-three">
                        Step 3: Edit Class Details
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-three"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-active-bordered-heading-three">
                        <div class="pb-4 px-5">
                            <p class="text-gray-800">
                                To edit class details:
                            </p>
                            <ol class="list-decimal list-inside pl-5 mt-2">
                                <li>Click the "Edit" button next to the class you want to update.</li>
                                <li>A modal form will appear where you can update the class information.</li>
                                <li>Change the details as needed and click "Save" to update the class.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl"
                    id="hs-active-bordered-heading-four">
                    <button
                        class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                        aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-four">
                        Step 4: View and Manage Students
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-four"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-active-bordered-heading-four">
                        <div class="pb-4 px-5">
                            <p class="text-gray-800">
                                To view and manage students:
                            </p>
                            <ol class="list-decimal list-inside pl-5 mt-2">
                                <li>Navigate to the "Students" page from the dashboard.</li>
                                <li>Here, you can see a list of all students with details such as "NIM," "Name,"
                                    "Status,"
                                    and "Class."</li>
                                <li>To add a new student, click the "Add Student" button.</li>
                                <li>Edit student details by clicking the "Edit" button next to each student.</li>
                                <li>Use the "View" button to see more details about a student.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-transparent rounded-xl"
                    id="hs-active-bordered-heading-five">
                    <button
                        class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                        aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-five">
                        Step 5: Export Grades to PDF
                        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5v14"></path>
                        </svg>
                        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                        </svg>
                    </button>
                    <div id="hs-basic-active-bordered-collapse-five"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-active-bordered-heading-five">
                        <div class="pb-4 px-5">
                            <p class="text-gray-800">
                                To export grades to PDF:
                            </p>
                            <ol class="list-decimal list-inside pl-5 mt-2">
                                <li>Go to the "Grades" page for the specific class.</li>
                                <li>Select the semester you want to export grades for.</li>
                                <li>Click the "Export to PDF" button to download the grades.</li>
                                <li>Ensure your browser's PDF viewer is enabled to view or print the PDF file.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- component -->
        <div class="col-span-2 relative p-6 bg-white border border-gray-200 rounded-lg shadow-md">
            <div class="px-4 flex items-center justify-between">
                <span id="monthYear" tabindex="0" class="focus:outline-none text-base font-bold text-gray-800">October
                    2020</span>
                <div class="flex items-center">
                    <button id="prev" aria-label="calendar backward"
                        class="focus:text-gray-400 hover:text-gray-400 text-gray-800">
                        <!-- Left arrow icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="15 6 9 12 15 18" />
                        </svg>
                    </button>
                    <button id="next" aria-label="calendar forward"
                        class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800">
                        <!-- Right arrow icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="9 6 15 12 9 18" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between pt-12 overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">Mo</p>
                            </th>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">Tu</p>
                            </th>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">We</p>
                            </th>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">Th</p>
                            </th>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">Fr</p>
                            </th>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">Sa</p>
                            </th>
                            <th>
                                <p class="text-base font-medium text-center text-gray-800">Su</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="calendarBody">
                        <!-- Dates will be dynamically generated here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        /* Highlight today's date */
        .today {
            background-color: #1D4ED8;
            /* Blue background */
            color: white !important;
            /* White text color */
            border-radius: 9999rem;
        }
    </style>

    <script>
        const monthYear = document.getElementById('monthYear');
        const calendarBody = document.getElementById('calendarBody');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');

        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();

        // Get today's date
        const today = new Date();

        // Function to generate calendar
        function generateCalendar(month, year) {
            calendarBody.innerHTML = ''; // Clear previous calendar
            monthYear.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

            const firstDay = new Date(year, month).getDay();
            const daysInMonth = 32 - new Date(year, month, 32).getDate();

            let date = 1;
            for (let i = 0; i < 6; i++) {
                let row = document.createElement('tr');

                for (let j = 0; j < 7; j++) {
                    let cell = document.createElement('td');
                    let cellText = document.createElement('div');
                    cellText.className = 'p-2.5 cursor-pointer flex w-full rounded-full justify-center';

                    if (i === 0 && j < (firstDay === 0 ? 6 : firstDay - 1)) {
                        cellText.innerHTML = ''; // Empty cells before the first day of the month
                    } else if (date > daysInMonth) {
                        break;
                    } else {
                        // Check if the current date is today
                        if (date === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                            cellText.classList.add('today'); // Add the 'today' class
                        }
                        cellText.innerHTML = `<p class="text-base ${date === today.getDate() && month === today.getMonth() && year === today.getFullYear() ? 'text-white' : 'text-gray-500'}">${date}</p>`;
                        date++;
                    }
                    cell.appendChild(cellText);
                    row.appendChild(cell);
                }
                calendarBody.appendChild(row);
            }
        }

        // Event listeners for navigating months
        prev.addEventListener('click', () => {
            currentMonth = (currentMonth - 1 + 12) % 12;
            if (currentMonth === 11) currentYear--;
            generateCalendar(currentMonth, currentYear);
        });

        next.addEventListener('click', () => {
            currentMonth = (currentMonth + 1) % 12;
            if (currentMonth === 0) currentYear++;
            generateCalendar(currentMonth, currentYear);
        });

        // Initial call to generate calendar
        generateCalendar(currentMonth, currentYear);
    </script>

</x-layout>