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
                href="#">
                Daftar Mahasiswa
                <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                </svg>
            </a>
        </li>
    </ol>

    <div class="mt-2 flex flex-col relative p-6 py-4 bg-white border border-gray-200 rounded-lg shadow-md">
        <h1 class="mb-2 text-xl font-bold text-[#313131]">Detail Kelas</h1>
        <div class="grid">
            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">Jenjang</p>
                <p class="text-sm text-gray-500">: {{ $classroom->jenjang }}</p>
            </div>

            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">Program Studi</p>
                <p class="text-sm text-gray-500">: {{ $classroom->program_studi }}</p>
            </div>

            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">Fakultas</p>
                <p class="text-sm text-gray-500">: {{ $classroom->fakultas }}</p>
            </div>

            <div class="flex items-center border-b border-slate-400 py-2">
                <p class="text-sm text-gray-700 w-40">Tahun Masuk</p>
                <p class="text-sm text-gray-500">: {{ $classroom->tahun_masuk }}</p>
            </div>

            <div class="flex items-center py-2">
                <p class="text-sm text-gray-700 w-40">Kelas</p>
                <p class="text-sm text-gray-500">: {{ $classroom->kelas }}</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col relative p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <h1 class="mb-6 text-xl font-bold text-[#313131]">Daftar Mahasiswa</h1>
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

                                    <th scope="col" class="whitespace-nowrap text-start font-normal focus:outline-none">
                                        <div class="w-full px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                            Nama Mahasiswa
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="whitespace-nowrap text-center font-normal focus:outline-none">
                                        <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                            Nim Mahasiswa
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="whitespace-nowrap text-center font-normal focus:outline-none">
                                        <div class="px-10 py-3 inline-flex items-center text-sm text-gray-500">
                                            Status Mahasiswa
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="whitespace-nowrap px-10 py-3 text-center font-normal text-sm text-gray-500 bg-gray-50 --exclude-from-ordering">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($students as $student)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                        <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td
                                            class="p-3 px-10 whitespace-nowrap text-start text-sm font-medium text-gray-800">
                                            {{ $student->nama }}
                                        </td>
                                        <td class="p-3 whitespace-nowrap text-center text-sm font-medium text-gray-800">
                                            {{ $student->nim }}
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="w-full px-6 py-3 inline-flex justify-center ">
                                                @if ($student->status === 'Aktif')
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                                            </path>
                                                        </svg>
                                                        Active
                                                    </span>
                                                @else
                                                    <span
                                                        class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                                        <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                            </path>
                                                        </svg>
                                                        Not Active
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td
                                            class="px-3 py-2 whitespace-nowrap text-center text-sm font-medium flex items-center justify-center gap-x-2">
                                            <a class="py-1 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                                href="{{ route('grades.show', $student->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-eye">
                                                    <path
                                                        d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                                    <circle cx="12" cy="12" r="3" />
                                                </svg>
                                                Lihat
                                            </a>
                                            <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal"
                                                data-hs-overlay="#hs-edit-student-modal-{{ $student->id }}"
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

                                            <!-- Modal -->
                                            <div id="hs-edit-student-modal-{{ $student->id }}"
                                                class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                                role="dialog" tabindex="-1"
                                                aria-labelledby="hs-scale-animation-modal-label">
                                                <div
                                                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                    <div
                                                        class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                        <div class="flex justify-between items-center py-3 px-4 border-b">
                                                            <h3 class="font-bold text-gray-800">Edit Student</h3>
                                                            <button type="button"
                                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                                aria-label="Close"
                                                                data-hs-overlay="#hs-edit-student-modal-{{ $student->id }}">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="shrink-0 size-4"
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M18 6 6 18"></path>
                                                                    <path d="m6 6 12 12"></path>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <!-- Modal Form -->
                                                        <form action="{{ route('students.update', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="p-4 overflow-y-auto">
                                                                <div
                                                                    class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-6">
                                                                    <div class="sm:col-span-4">
                                                                        <label for="nim-{{ $student->id }}"
                                                                            class="block text-sm text-start font-medium text-gray-900">NIM</label>
                                                                        <div class="mt-2">
                                                                            <input type="text" name="nim"
                                                                                id="nim-{{ $student->id }}"
                                                                                value="{{ $student->nim }}"
                                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                        </div>
                                                                    </div>
                                                                    <div class="sm:col-span-4">
                                                                        <label for="nama-{{ $student->id }}"
                                                                            class="block text-sm text-start font-medium text-gray-900">Nama</label>
                                                                        <div class="mt-2">
                                                                            <input type="text" name="nama"
                                                                                id="nama-{{ $student->id }}"
                                                                                value="{{ $student->nama }}"
                                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-span-4">
                                                                        <label for="status-{{ $student->id }}"
                                                                            class="block text-sm text-start font-medium text-gray-900">Status</label>
                                                                        <div class="mt-2">
                                                                            <select name="status"
                                                                                id="status-{{ $student->id }}"
                                                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                                                <option value="Aktif" {{ $student->status === 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                                                <option value="Tidak Aktif" {{ $student->status === 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!-- Modal Footer -->
                                                            <div
                                                                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                                                                <button type="submit"
                                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                                    Simpan
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="py-1 px-4 hidden" data-hs-datatable-paging="">
                        <nav class="flex items-center space-x-1">
                            <button type="button"
                                class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-datatable-paging-prev="">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <div class="flex items-center space-x-1 [&>.active]:bg-gray-100"
                                data-hs-datatable-paging-pages="">
                            </div>
                            <button type="button"
                                class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-datatable-paging-next="">
                                <span class="sr-only">Next</span>
                                <span aria-hidden="true">»</span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>