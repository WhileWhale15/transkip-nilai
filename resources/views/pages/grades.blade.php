<x-layout>
    <ol id="breadcrumb" class="flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                href="/classes">
                Daftar Kelas
            </a>
            <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                href="/students">
                Daftar Mahasiswa
                <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                </svg>
            </a>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                href="#">
                Nilai Mahasiswa
                <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                </svg>
            </a>
        </li>
    </ol>

    <div class="flex flex-col relative p-6 py-4 bg-white border border-gray-200 rounded-lg shadow-md">
        <h1 class="mb-2 text-xl font-bold text-[#313131]">Nilai Mahasiswa</h1>
        <div class="grid gap-y-2">
            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">NIM</p>
                <p class="text-sm text-gray-500">: {{ $student->nim }}</p>
            </div>

            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">Nama Mahasiswa</p>
                <p class="text-sm text-gray-500">: {{ $student->nama }}</p>
            </div>

            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">Status</p>
                <p class="text-sm text-gray-500">: {{ $student->status }}</p>
            </div>
        </div>
    </div>

    <div class="mt-2 flex flex-col relative p-6 py-4 bg-white border border-gray-200 rounded-lg shadow-md gap-5">
        <!-- Semester Navs -->
        <div class="flex justify-between border-b-2 border-gray-200">
            <nav class="-mb-0.5 flex gap-x-6">
                <a id="semester1-tab"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-blue-500 text-sm font-medium whitespace-nowrap text-blue-600 focus:outline-none focus:text-blue-800"
                    href="#1" onclick="showTable(1)">
                    Semester 1
                </a>
                <a id="semester2-tab"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#2" onclick="showTable(2)">
                    Semester 2
                </a>
                <a id="semester3-tab"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#3" onclick="showTable(3)">
                    Semester 3
                </a>
                <a id="semester4-tab"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#4" onclick="showTable(4)">
                    Semester 4
                </a>
                <a id="semester5-tab"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#5" onclick="showTable(5)">
                    Semester 5
                </a>
                <a id="semester6-tab"
                    class="py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                    href="#6" onclick="showTable(6)">
                    Semester 6
                </a>
            </nav>

            <div class="hs-dropdown [--placement:bottom-right] relative inline-block">
                <button id="hs-as-table-table-export-dropdown-btn" type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" x2="12" y1="15" y2="3" />
                    </svg>
                    Export
                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="hs-as-table-table-export-dropdown"
                    class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-10 bg-white shadow-md rounded-lg p-2 mt-2"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-as-table-table-export-dropdown">
                    <div class="py-2 first:pt-0 last:pb-0">
                        <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-600">
                            Options
                        </span>
                        <button id="printBtn"
                            class="w-full flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 6 2 18 2 18 9" />
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                                <rect width="12" height="8" x="6" y="14" />
                            </svg>
                            Print
                        </button>
                    </div>
                    <!-- <div class="py-2 first:pt-0 last:pb-0">
                        <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400">
                            Download options
                        </span>
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                            href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                            </svg>
                            Excel
                        </a>
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                            href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z" />
                            </svg>
                            .CSV
                        </a>
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                            href="#">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                <path
                                    d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                            </svg>
                            .PDF
                        </a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Tables -->
        <div id="semester1-table" class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="min-h-fit min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-4 py-3 inline-flex items-center text-sm text-gray-500">
                                                No.
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-start font-normal focus:outline-none">
                                            <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                                Mata Kuliah
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Tugas
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Kuis
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UTS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UAS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                SKS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Predikat
                                            </div>
                                        </th>
                                        <th scope="col" id="grades-action-th"
                                            class="px-6 py-3 text-center font-normal text-sm text-gray-500 bg-gray-50 --exclude-from-ordering">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($gradesBySemester['1'] as $grade)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="p-3 px-10 whitespace-nowrap text-start text-sm font-medium text-gray-800">
                                                {{ $grade->course->nama_mata_kuliah }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_tugas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_kuis }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uts }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->sks }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->predikat }}
                                            </td>
                                            <td id="grades-action-td"
                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium flex items-center justify-center gap-x-2">
                                                <button type="button"
                                                    class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-pencil">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="semester2-table" class="hidden">
            <div class="-m-1.5 overflow-x-auto">
                <div class="min-h-fit min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-4 py-3 inline-flex items-center text-sm text-gray-500">
                                                No.
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-start font-normal focus:outline-none">
                                            <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                                Mata Kuliah
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Tugas
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Kuis
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UTS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UAS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                SKS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Predikat
                                            </div>
                                        </th>
                                        <th scope="col" id="grades-action-th"
                                            class="px-6 py-3 text-center font-normal text-sm text-gray-500 bg-gray-50 --exclude-from-ordering">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($gradesBySemester['2'] as $grade)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="p-3 px-10 whitespace-nowrap text-start text-sm font-medium text-gray-800">
                                                {{ $grade->course->nama_mata_kuliah }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_tugas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_kuis }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uts }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->sks }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->predikat }}
                                            </td>
                                            <td id="grades-action-td"
                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium flex items-center justify-center gap-x-2">
                                                <button type="button"
                                                    class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-pencil">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="semester3-table" class="hidden">
            <div class="-m-1.5 overflow-x-auto">
                <div class="min-h-fit min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-4 py-3 inline-flex items-center text-sm text-gray-500">
                                                No.
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-start font-normal focus:outline-none">
                                            <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                                Mata Kuliah
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Tugas
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Kuis
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UTS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UAS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                SKS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Predikat
                                            </div>
                                        </th>
                                        <th scope="col" id="grades-action-th"
                                            class="px-6 py-3 text-center font-normal text-sm text-gray-500 bg-gray-50 --exclude-from-ordering">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($gradesBySemester['3'] as $grade)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="p-3 px-10 whitespace-nowrap text-start text-sm font-medium text-gray-800">
                                                {{ $grade->course->nama_mata_kuliah }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_tugas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_kuis }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uts }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->sks }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->predikat }}
                                            </td>
                                            <td id="grades-action-td"
                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium flex items-center justify-center gap-x-2">
                                                <button type="button"
                                                    class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-pencil">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="semester4-table" class="hidden">
            <div class="-m-1.5 overflow-x-auto">
                <div class="min-h-fit min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-4 py-3 inline-flex items-center text-sm text-gray-500">
                                                No.
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-start font-normal focus:outline-none">
                                            <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                                Mata Kuliah
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Tugas
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Kuis
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UTS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UAS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                SKS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Predikat
                                            </div>
                                        </th>
                                        <th scope="col" id="grades-action-th"
                                            class="px-6 py-3 text-center font-normal text-sm text-gray-500 bg-gray-50 --exclude-from-ordering">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($gradesBySemester['4'] as $grade)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="p-3 px-10 whitespace-nowrap text-start text-sm font-medium text-gray-800">
                                                {{ $grade->course->nama_mata_kuliah }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_tugas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_kuis }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uts }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->sks }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->predikat }}
                                            </td>
                                            <td id="grades-action-td"
                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium flex items-center justify-center gap-x-2">
                                                <button type="button"
                                                    class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-pencil">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="semester5-table" class="hidden">
            <div class="-m-1.5 overflow-x-auto">
                <div class="min-h-fit min-w-full inline-block align-middle">
                    <div class="border rounded-lg divide-y divide-gray-200">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-4 py-3 inline-flex items-center text-sm text-gray-500">
                                                No.
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-start font-normal focus:outline-none">
                                            <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                                Mata Kuliah
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Tugas
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai Kuis
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UTS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Nilai UAS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                SKS
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap text-center font-normal focus:outline-none">
                                            <div class="px-6 py-3 inline-flex items-center text-sm text-gray-500">
                                                Predikat
                                            </div>
                                        </th>
                                        <th scope="col" id="grades-action-th"
                                            class="px-6 py-3 text-center font-normal text-sm text-gray-500 bg-gray-50 --exclude-from-ordering">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($gradesBySemester['5'] as $grade)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td
                                                class="p-3 px-10 whitespace-nowrap text-start text-sm font-medium text-gray-800">
                                                {{ $grade->course->nama_mata_kuliah }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_tugas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_kuis }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uts }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->nilai_uas }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->sks }}
                                            </td>
                                            <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                                {{ $grade->predikat }}
                                            </td>
                                            <td id="grades-action-td"
                                                class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium flex items-center justify-center gap-x-2">
                                                <button type="button"
                                                    class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-pencil">
                                                        <path
                                                            d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                                        <path d="m15 5 4 4" />
                                                    </svg>
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="semester6-table" class="hidden">
            <p class="p-6 text-center text-sm font-medium text-gray-800">Belum ada data</p>
        </div>
    </div>

    <script>
        function showTable(semester) {
            // Hide all tables
            document.getElementById('semester1-table').classList.add('hidden');
            document.getElementById('semester2-table').classList.add('hidden');
            document.getElementById('semester3-table').classList.add('hidden');
            document.getElementById('semester4-table').classList.add('hidden');
            document.getElementById('semester5-table').classList.add('hidden');
            document.getElementById('semester6-table').classList.add('hidden');

            // Remove active state from all tabs
            document.getElementById('semester1-tab').classList.remove('border-blue-500', 'text-blue-600', 'font-medium');
            document.getElementById('semester2-tab').classList.remove('border-blue-500', 'text-blue-600', 'font-medium');
            document.getElementById('semester3-tab').classList.remove('border-blue-500', 'text-blue-600', 'font-medium');
            document.getElementById('semester4-tab').classList.remove('border-blue-500', 'text-blue-600', 'font-medium');
            document.getElementById('semester5-tab').classList.remove('border-blue-500', 'text-blue-600', 'font-medium');
            document.getElementById('semester6-tab').classList.remove('border-blue-500', 'text-blue-600', 'font-medium');

            // Show the selected table
            document.getElementById(`semester${semester}-table`).classList.remove('hidden');

            // Set active state for the clicked tab
            document.getElementById(`semester${semester}-tab`).classList.add('border-blue-500', 'text-blue-600', 'font-medium');
        }
    </script>

    <script>
        const printButton = document.getElementById('printBtn');

        // const printPage = () => {
        //     const printFrame = document.createElement('iframe');
        //     printFrame.style.display = 'none';
        //     printFrame.src = 'grades';

        //     document.body.appendChild(printFrame);

        //     printFrame.contentWindow.focus();
        //     printFrame.contentWindow.print();
        // }

        printButton.addEventListener('click', () => {
            // printPage();
            window.print();
        })


    </script>


</x-layout>