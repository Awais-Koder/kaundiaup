<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-4xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('citizens.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <!-- Search Section -->
                {{-- <div class="flex items-center space-x-4">
                    <input type="search" name="search_data" id="search_data"
                        placeholder="Enter NID No./Birth Registration No./Passport No./Citizen ID in English"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <input type="hidden" name="citizen_id">
                    <button type="button" onclick="check_assessment_exist_data()"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        <span class="ion-ios-search" aria-hidden="true"></span> Search
                    </button>
                </div> --}}

                <!-- Mandatory Fields Note -->
                <div class="text-red-500 text-sm">* Marked fields are mandatory.</div>
                <div>
                    <label for="certificate" class="block text-sm font-medium text-gray-700">Select Certificate <span
                            class="text-red-500">*</span></label>
                    <select name="certificate_id" id="certificate"
                        class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option selected disabled>-- select certificate --</option>
                        @foreach (App\Services\DefaultService::getCertificates() as $certificate)
                            <option value="{{ $certificate->id }}"
                                {{ old('certificate_id') == $certificate->id ? 'selected' : '' }}>
                                {{ $certificate->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('certificate_id')
                        <span class="text-red-500 block">{{ $message }}</span>
                    @enderror
                    <span class="text-sm text-gray-500">Please select.</span>
                </div>
                <!-- Name and Mobile -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="name_bn" class="block text-sm font-medium text-gray-700">Name (in Bengali) <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name_bn" id="name_bn" placeholder="Full name"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('name_bn') }}">
                        <span class="text-sm text-gray-500">Give the name in Bengali.</span>
                        @error('name_bn')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" placeholder="Full name"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('image') }}" accept="image/*">
                        @error('image')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                        <input type="text" name="mobile" id="mobile" placeholder="Provide in English"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('mobile') }}">
                        <span class="text-sm text-gray-500">Enter your 11-digit mobile number.</span>
                        @error('mobile')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- National ID and Birth Registration Number -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nid" class="block text-sm font-medium text-gray-700">National ID (in
                            English)</label>
                        <input type="text" name="nid" id="nid" placeholder="1616623458679011"
                            value="{{ old('nid') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('nid')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">Enter your National ID number in English.</span>
                    </div>
                    <div>
                        <label for="birth_id" class="block text-sm font-medium text-gray-700">Birth Registration Number
                            (in English)</label>
                        <input type="text" name="birth_id" id="birth_id" placeholder="1919623458679011"
                            value="{{ old('birth_id') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('birth_id')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">Birth registration number in English.</span>
                    </div>
                </div>

                <!-- Passport Number and Date of Birth -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="passport_no" class="block text-sm font-medium text-gray-700">Passport Number (in
                            English)</label>
                        <input type="text" name="passport_no" id="passport_no" placeholder="1616623458679011"
                            value="{{ old('passport_no') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('passport_no')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">Enter your passport number in English.</span>
                    </div>
                    <div>
                        <label for="birth_date" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" name="birth_date" id="birth_date" placeholder="0000-00-00"
                            value="{{ old('birth_date') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('birth_date')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">Give your date of birth.</span>
                    </div>
                </div>


                <!-- Father's Name and Mother's Name -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="father_name_bn" class="block text-sm font-medium text-gray-700">Father's
                            Name</label>
                        <input type="text" name="father_name_bn" id="father_name_bn" placeholder="Father's name"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('father_name_bn') }}">
                        <span class="text-sm text-gray-500">Give your father's name in Bengali.</span>
                        @error('father_name_bn')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="mother_name_bn" class="block text-sm font-medium text-gray-700">Mother's
                            Name</label>
                        <input type="text" name="mother_name_bn" id="mother_name_bn" placeholder="Mother's name"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('mother_name_bn') }}">
                        <span class="text-sm text-gray-500">Give your mother's name in Bengali.</span>
                        @error('mother_name_bn')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Occupation and Resident -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="occupation" class="block text-sm font-medium text-gray-700">Occupation</label>
                        <select name="occupation" id="occupation"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select</option>
                            <option value="1">Agriculture</option>
                            <option value="2">Housewife</option>
                            <option value="3">Government job</option>
                            <option value="4">Private sector employment</option>
                            <option value="5">Businessman</option>
                            <option value="6">Teacher</option>
                            <option value="7">Expatriate</option>
                            <option value="8">Driver</option>
                            <option value="9">Doctor</option>
                            <option value="10">Lawyer</option>
                            <option value="11">Blacksmith</option>
                            <option value="12">Kumar</option>
                            <option value="13">In prison</option>
                            <option value="14">Other</option>
                        </select>
                        <span class="text-sm text-gray-500">Please select.</span>
                    </div>
                    <div>
                        <label for="resident" class="block text-sm font-medium text-gray-700">Resident</label>
                        <select name="resident" id="resident"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select</option>
                            <option value="1">Temporary</option>
                            <option value="2">Permanent</option>
                        </select>
                        <span class="text-sm text-gray-500">Please select.</span>
                    </div>
                </div>

                <!-- Educational Qualification and Religion -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="educational_qualification"
                            class="block text-sm font-medium text-gray-700">Educational Qualification</label>
                        <select name="educational_qualification" id="educational_qualification"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select</option>
                            <option value="1">Primary</option>
                            <option value="2">J.S.C.</option>
                            <option value="3">P.S.C.</option>
                            <option value="4">S.S.C.</option>
                            <option value="5">H.S.C.</option>
                            <option value="6">Graduate</option>
                            <option value="7">Postgraduate</option>
                        </select>
                        <span class="text-sm text-gray-500">Please select.</span>
                        @error('educational_qualification')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
                        <select name="religion" id="religion"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select</option>
                            <option value="1">Islam</option>
                            <option value="2">Hindu</option>
                            <option value="3">Buddhism</option>
                            <option value="4">Christianity</option>
                            <option value="5">Other</option>
                        </select>
                        <span class="text-sm text-gray-500">Please select.</span>
                        @error('religion')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Gender and Marital Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gender <span
                                class="text-red-500">*</span></label>
                        <div class="mt-1 space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="male"
                                    class="form-radio text-blue-500">
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="male"
                                    class="form-radio text-blue-500">
                                <span class="ml-2">Female</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="Other"
                                    class="form-radio text-blue-500">
                                <span class="ml-2">Third Gender</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="marital_status" class="block text-sm font-medium text-gray-700">Marital Status
                            <span class="text-red-500">*</span></label>
                        <select name="marital_status" id="marital_status"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="" selected disabled>Select</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widow">Widow</option>
                            <option value="other">Other</option>
                        </select>
                        <span class="text-sm text-gray-500">Please select.</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="relation">
                    <div class="" id="husband">
                        <div>
                            <label for="husband_name_en" class="block text-sm font-medium text-gray-700">Husband's
                                name (in English)</label>
                            <input type="text" name="husband_name_en" id="husband_name_en"
                                value="{{ old('husband_name_en') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup"
                                placeholder="Husband's name">
                            <span class="text-sm text-gray-500">Give your husband's name in English....</span>
                            @error('husband_name_en')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="husband_name_bn" class="block text-sm font-medium text-gray-700">Husband's
                                name (in Bengali)</label>
                            <input type="text" name="husband_name_bn" id="husband_name_bn"
                                value="{{ old('husband_name_bn') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Husband's name">
                            <span class="text-sm text-gray-500">Give your husband's name in Bengali....</span>
                            @error('husband_name_bn')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="" id="wife">
                        <div>
                            <label for="wife_name_en" class="block text-sm font-medium text-gray-700">Wife's name (in
                                English)</label>
                            <input type="text" name="wife_name_en" id="wife_name_en"
                                value="{{ old('wife_name_en') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup"
                                placeholder="Wife's name">
                            <span class="text-sm text-gray-500">Give your wife's name in English....</span>
                            @error('wife_name_en')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="wife_name_bn" class="block text-sm font-medium text-gray-700">Wife's name (in
                                Bengali)</label>
                            <input type="text" name="wife_name_bn" id="wife_name_bn"
                                value="{{ old('wife_name_bn') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Wife's name">
                            <span class="text-sm text-gray-500">Give your wife's name in Bengali....</span>
                            @error('wife_name_bn')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <h4 class="text-lg font-semibold">
                        Permanent address
                    </h4>
                </div>
                <div class="space-y-6">
                    <!-- Holding/Assessment No -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="permanent_holding_no" class="block text-sm font-medium text-gray-700">
                                Holding/Assessment No. <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="permanent_holding_no" name="permanent_holding_no"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                autocomplete="permanent_holding_no" data-parsley-required data-parsley-trigger="keyup"
                                value="{{ old('permanent_holding_no') }}">
                            <p class="mt-1 text-sm text-gray-500">Give the holding/assessment number in English...</p>
                            @error('permanent_holding_no')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Ward No and Village -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="ward_no" class="block text-sm font-medium text-gray-700">
                                Ward No. <span class="text-red-500">*</span>
                            </label>
                            <select id="ward_no" name="ward_no"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                                <option value="">--Select--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                            <p class="mt-1 text-sm text-gray-500">Select the ward...</p>
                        </div>
                        <div>
                            <label for="moholla_id" class="block text-sm font-medium text-gray-700">
                                Village/Neighborhood <span class="text-red-500">*</span>
                            </label>
                            <select id="moholla_id" name="moholla_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                data-parsley-required>
                                <option value="" disabled selected>Select Village/Neighborhood</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">Village {{ $i }}</option>
                                @endfor

                            </select>
                            <p class="mt-1 text-sm text-gray-500">Select village/neighborhood...</p>
                        </div>
                    </div>

                    <!-- Road/Block/Sector and District -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="permanent_rbs_bn" class="block text-sm font-medium text-gray-700">
                                Road/Block/Sector (in Bengali)
                            </label>
                            <input type="text" id="permanent_rbs_bn" name="permanent_rbs_bn"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                placeholder="" autocomplete="permanent_rbs_bn" data-parsley-maxlength="100"
                                data-parsley-trigger="keyup" value="{{ old('permanent_rbs_bn') }}">
                            <p class="mt-1 text-sm text-gray-500">Road/Block/Sector in Bengali...</p>
                        </div>
                        <div>
                            <label for="permanent_district_id" class="block text-sm font-medium text-gray-700">
                                District <span class="text-red-500">*</span>
                            </label>
                            <select id="permanent_district_id" name="permanent_district_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                onchange="getLocation($(this).val(), 'permanent_district', 'permanent_upazila_append', 'permanent_upazila_id', 'permanent_upazila', 3 )">
                                <option value="" selected disabled>-Select your district-</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="District {{ $i }}">District {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">Select district...</p>
                        </div>
                    </div>

                    <!-- Upazila and Post Office -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="permanent_upazila_id" class="block text-sm font-medium text-gray-700">
                                Upazila/Thana <span class="text-red-500">*</span>
                            </label>
                            <select id="permanent_upazila_id" name="permanent_upazila_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                onchange="getLocation($(this).val(), 'permanent_upazila', 'permanent_post_office_append', 'permanent_postoffice_id', 'permanent_postoffice', 6 )">
                                <option value="" selected disabled>Select Upazila/Thana</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="Thana {{ $i }}">Thana {{ $i }}</option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">Select Upazila/Thana...</p>
                        </div>
                        <div>
                            <label for="permanent_postoffice_id" class="block text-sm font-medium text-gray-700">
                                Post Office <span class="text-red-500">*</span>
                            </label>
                            <select id="permanent_postoffice_id" name="permanent_postoffice_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                onchange="getLocation($(this).val(), 'permanent_postoffice')">
                                <option value="">Select Post Office</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="Post Office {{ $i }}">Post Office {{ $i }}
                                    </option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">Select post office...</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <div class="text-center">
                        <h4 class="text-xl font-bold">Household survey data</h4>
                        <hr class="my-4">
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Male and Female Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="male" class="block text-sm font-medium">
                                Male <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="male" name="male" placeholder="Number of men"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="male" data-parsley-type="number" data-parsley-required=""
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please give the number of men in numerical
                                order...</span>
                            @error('male')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="female" class="block text-sm font-medium">
                                Female <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="female" name="female" placeholder="Woman's number"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="female" data-parsley-type="number" data-parsley-required=""
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please give the number of women in numerical
                                order...</span>
                            @error('female')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Children and Handicap Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="child" class="block text-sm font-medium">Child</label>
                            <input type="number" id="child" name="child" placeholder="Number of children"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                            <span class="text-sm text-gray-500">Please enter the number of children in numerical
                                order...</span>
                            @error('child')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="handicap" class="block text-sm font-medium">Number of disabilities?</label>
                            <input type="number" id="handicap" name="handicap" placeholder="Number of handicaps"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="handicap" data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please enter the number of disabilities in numerical
                                format...</span>
                            @error('handicap')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Earning and Dependents Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="member_of_earning" class="block text-sm font-medium">
                                Number of earning members in the family
                            </label>
                            <input type="number" id="member_of_earning" name="member_of_earning"
                                placeholder="Number of earning members in the family"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="member_of_earning" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please provide the number of income earners in the
                                household in numerical format...</span>
                            @error('member_of_earning')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="number_of_dependents_family" class="block text-sm font-medium">
                                Number of dependents in the family
                            </label>
                            <input type="number" id="number_of_dependents_family" name="number_of_dependents_family"
                                placeholder="Number of dependents in the family"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="number_of_dependents_family" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please enter the number of dependents in the household
                                in numerical format...</span>
                            @error('number_of_dependents_family')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Job Seekers Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="ssc_job_holder" class="block text-sm font-medium">
                                Number of job seekers in the family aged 18-35, SSC/above pass
                            </label>
                            <input type="number" id="ssc_job_holder" name="ssc_job_holder"
                                placeholder="Number of job seekers in the family aged 18-35, SSC/above pass"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="ssc_job_holder" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please provide the number of job seekers in the family
                                aged 18-35, SSC/above pass, in numerical format...</span>

                            @error('ssc_job_holder')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="hsc_job_holder" class="block text-sm font-medium">
                                Number of people in the family aged 18-35, SSC/above pass, aspiring to become
                                entrepreneurs
                            </label>
                            <input type="number" id="hsc_job_holder" name="hsc_job_holder"
                                placeholder="Number of people in the family aged 18-35, SSC/above pass, aspiring to become entrepreneurs"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="hsc_job_holder" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Please provide the number of people in the family aged
                                18-35 years who are aspiring to become entrepreneurs, SSC/above pass, in numerical
                                format...</span>

                            @error('hsc_job_holder')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="space-y-6">
                        <!-- Land Ownership and Income Source Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="land_owner" class="block text-sm font-medium">Land ownership</label>
                                <input type="text" name="land_owner" id="land_owner"
                                    placeholder="Provide land ownership"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    autocomplete="land_owner" data-parsley-trigger="keyup"
                                    value="{{ old('land_owner') }}">
                                <span class="text-sm text-gray-500">Please provide ownership of the land...</span>
                                @error('land_owner')
                                    <span class="text-red-500 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="income_source" class="block text-sm font-medium">Annual income
                                    source</label>
                                <input type="text" name="income_source" id="income_source"
                                    placeholder="Provide an annual source of income."
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    autocomplete="income_source" data-parsley-trigger="keyup">
                                <span class="text-sm text-gray-500">Give the source of annual income...</span>
                            </div>
                        </div>

                        <!-- Annual Income and Tube Well Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="yearly_income" class="block text-sm font-medium">Annual income</label>
                                <input type="text" name="yearly_income" id="yearly_income"
                                    placeholder="Annual income"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    autocomplete="yearly_income" data-parsley-trigger="keyup">
                            </div>

                            <div class="space-y-2">
                                <label for="nolkup" class="block text-sm font-medium">Is there a tube well?</label>
                                <div class="flex space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="nolkup_1" name="nolkup" value="1"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">Yes</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="nolkup_2" name="nolkup" value="2"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">No</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Major Expenditure Items and Remittance Senders Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="expanse_sector" class="block text-sm font-medium">Major expenditure
                                    items</label>
                                <input type="text" name="expanse_sector" id="expanse_sector"
                                    placeholder="Provide the main categories of expenses."
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    autocomplete="expanse_sector" data-parsley-trigger="keyup">
                                <span class="text-sm text-gray-500">Please provide the main areas of
                                    expenditure...</span>
                            </div>

                            <div class="space-y-2">
                                <label for="remittance_senders" class="block text-sm font-medium">
                                    Number of remittance senders/number of expatriates in the household
                                </label>
                                <input type="text" name="remittance_senders" id="remittance_senders"
                                    placeholder="Provide the number of remittance senders/expatriates in the household."
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                    autocomplete="remittance_senders" data-parsley-type="number"
                                    data-parsley-trigger="keyup">
                                <span class="text-sm text-gray-500">Please provide the number of remittance
                                    senders/expatriates in the family...</span>
                            </div>
                        </div>

                        <!-- Sanitation and Electricity/Mobile Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="sanitation" class="block text-sm font-medium">Sanitation status</label>
                                <div class="flex space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="sanitation_1" name="sanitation" value="1"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">Raw</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="sanitation_2" name="sanitation" value="2"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">Ripe</span>
                                    </label>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="electronics_instrument" class="block text-sm font-medium">
                                    Is there electricity/mobile phone/computer?
                                </label>
                                <div class="flex space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="electronics_instrument_1"
                                            name="electronics_instrument" value="1"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">Yes</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="electronics_instrument_2"
                                            name="electronics_instrument" value="2"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">No</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Social Security Program Section -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="social_security" class="block text-sm font-medium">
                                    Is social security covered by the program?
                                </label>
                                <div class="flex space-x-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="social_security_1" name="social_security"
                                            value="1" onclick="showOption(this.value)"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">Yes</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" id="social_security_2" name="social_security"
                                            value="2" onclick="showOption(this.value)"
                                            class="text-blue-600 focus:ring-blue-500">
                                        <span class="ml-2 text-sm">No</span>
                                    </label>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="security_program" class="block text-sm font-medium">Select Program</label>
                                <select id="security_program" name="security_program"
                                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                                    <option value="">Select</option>
                                    <option value="1">Old age allowance</option>
                                    <option value="2">Widow's allowance</option>
                                    <option value="3">Disability allowance</option>
                                    <option value="4">Mother and child support allowance</option>
                                    <option value="5">VWB</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Add More Sections Similar Way -->
                </div>
                <div class="mt-12">
                    <div class="text-center">
                        <h4 class="text-lg font-semibold">Accommodation Information</h4>
                        <hr class="mt-2 border-gray-300">
                    </div>
                </div>

                <div class="mt-6">
                    <!-- Multi-storey building and Paved building -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="multi_building_house" class="block text-sm font-medium text-gray-700">
                                Multi-storey Building
                            </label>
                            <input type="number" name="multi_building_house" id="multi_building_house"
                                value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Number of multi-storey buildings" autocomplete="multi_building_house"
                                data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Give the number of multi-storey buildings....</span>
                        </div>

                        <div>
                            <label for="ripe_house" class="block text-sm font-medium text-gray-700">
                                Paved Building
                            </label>
                            <input type="number" name="ripe_house" id="ripe_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Number of concrete buildings" autocomplete="ripe_house"
                                data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Give the number of pucca buildings....</span>
                        </div>
                    </div>

                    <!-- Semi-detached building and Tin shed -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="semi_ripe_house" class="block text-sm font-medium text-gray-700">
                                Semi-detached Building
                            </label>
                            <input type="number" name="semi_ripe_house" id="semi_ripe_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Number of semi-detached buildings" autocomplete="semi_ripe_house"
                                data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Give the number of semi-detached buildings....</span>
                        </div>

                        <div>
                            <label for="tin_shed_house" class="block text-sm font-medium text-gray-700">
                                Tin Shed
                            </label>
                            <input type="number" name="tin_shed_house" id="tin_shed_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tinshed number" autocomplete="tin_shed_house" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Give the tin shed number....</span>
                        </div>
                    </div>

                    <!-- Raw house -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="raw_house" class="block text-sm font-medium text-gray-700">
                                Raw House
                            </label>
                            <input type="number" name="raw_house" id="raw_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Number of raw houses" autocomplete="raw_house"
                                data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">Give the number of unbuilt houses....</span>
                        </div>
                    </div>
                </div>

                <hr class="my-8 border-gray-300">

                <!-- Annual evaluation and Tax -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="probable_rate" class="block text-sm font-medium text-gray-700">
                            Annual Evaluation <span class="text-red-500">*</span>
                        </label>
                        <input type="number" name="probable_rate" id="probable_rate" value=""
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Annual evaluation" autocomplete="probable_rate" data-parsley-required=""
                            data-parsley-type="number" data-parsley-trigger="keyup">
                        <span class="text-sm text-gray-500">Please give an annual evaluation....</span>
                        @error('probable_rate')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="halson_percentage" class="block text-sm font-medium text-gray-700">
                            Tax Levied <span class="text-red-500">*</span>
                        </label>
                        <span class="block text-gray-500 text-xs">(Tax levied as per law 1-7%)</span>
                        <div class="flex mt-1 space-x-2">
                            <input type="number" step="any" name="halson_percentage" id="halson_percentage"
                                value=""
                                class="block w-1/2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="%">
                            <input type="number" name="halson_tax" id="halson_tax" value=""
                                class="block w-1/2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Tax" readonly>
                        </div>
                        <span class="text-sm text-gray-500">Please pay the tax due....</span>
                        @error('halson_percentage')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
