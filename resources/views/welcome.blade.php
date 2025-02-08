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

                <!-- Mandatory Fields Note   -->
                <div class="text-red-500 text-sm">* Marked fields are mandatory.</div>
                <div>
                    <label for="certificate" class="block text-sm font-medium text-gray-700">সার্টিফিকেট নির্বাচন করুন <span
                            class="text-red-500">*</span></label>
                    <select name="certificate_id" id="certificate"
                        class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option selected disabled>-- সার্টিফিকেট নির্বাচন করুন --</option>
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
                    <span class="text-sm text-gray-500">দয়া করে নির্বাচন করুন।</span>
                </div>
                <!-- Name and Mobile -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name_bn" class="block text-sm font-medium text-gray-700">নাম (বাংলায়) <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name_bn" id="name_bn" placeholder="পুরো নাম"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('name_bn') }}">
                        <span class="text-sm text-gray-500">বাংলায় নাম দিন।</span>
                        @error('name_bn')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="name_en" class="block text-sm font-medium text-gray-700">নাম (ইংরেজিতে) <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name_en" id="name_en" placeholder="Full name"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('name_en') }}">
                        <span class="text-sm text-gray-500">ইংরেজিতে নাম দিন।</span>
                        @error('name_en')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">ছবি</label>
                        <input type="file" name="image" id="image" placeholder="সম্পূর্ণ নাম"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('image') }}" accept="image/*">
                        @error('image')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-700">মোবাইল</label>
                        <input type="text" name="mobile" id="mobile" placeholder="ইংরেজিতে লিখুন"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('mobile') }}">
                        <span class="text-sm text-gray-500">আপনার ১১-সংখ্যার মোবাইল নম্বর লিখুন।</span>
                        @error('mobile')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- National ID and Birth Registration Number -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nid" class="block text-sm font-medium text-gray-700">জাতীয় পরিচয়পত্র নম্বর (ইংরেজিতে)</label>
                        <input type="text" name="nid" id="nid" placeholder="1616623458679011"
                            value="{{ old('nid') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('nid')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">আপনার জাতীয় পরিচয়পত্র নম্বর ইংরেজিতে লিখুন।</span>
                    </div>
                    <div>
                        <label for="birth_id" class="block text-sm font-medium text-gray-700">জন্ম নিবন্ধন নম্বর (ইংরেজিতে)</label>
                        <input type="text" name="birth_id" id="birth_id" placeholder="1919623458679011"
                            value="{{ old('birth_id') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('birth_id')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">জন্ম নিবন্ধন নম্বর ইংরেজিতে লিখুন।</span>
                    </div>
                </div>


                <!-- Passport Number and Date of Birth -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="passport_no" class="block text-sm font-medium text-gray-700">পাসপোর্ট নম্বর (ইংরেজিতে)</label>
                        <input type="text" name="passport_no" id="passport_no" placeholder="1616623458679011"
                            value="{{ old('passport_no') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('passport_no')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">আপনার পাসপোর্ট নম্বর ইংরেজিতে লিখুন।</span>
                    </div>
                    <div>
                        <label for="birth_date" class="block text-sm font-medium text-gray-700">জন্ম তারিখ</label>
                        <input type="date" name="birth_date" id="birth_date" placeholder="0000-00-00"
                            value="{{ old('birth_date') }}"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('birth_date')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                        <span class="text-sm text-gray-500">আপনার জন্ম তারিখ প্রদান করুন।</span>
                    </div>
                </div>



                <!-- Father's Name and Mother's Name -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="father_name_bn" class="block text-sm font-medium text-gray-700">বাবার নাম</label>
                        <input type="text" name="father_name_bn" id="father_name_bn" placeholder="বাবার নাম"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('father_name_bn') }}">
                        <span class="text-sm text-gray-500">আপনার বাবার নাম বাংলায় লিখুন।</span>
                        @error('father_name_bn')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="father_name_en" class="block text-sm font-medium text-gray-700">Father's Name</label>
                        <input type="text" name="father_name_en" id="father_name_en" placeholder="Father's name"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('father_name_en') }}">
                        <span class="text-sm text-gray-500">আপনার বাবার নাম ইংরেজিতে লিখুন।</span>
                        @error('father_name_en')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="mother_name_bn" class="block text-sm font-medium text-gray-700">মায়ের নাম</label>
                        <input type="text" name="mother_name_bn" id="mother_name_bn" placeholder="মায়ের নাম"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            value="{{ old('mother_name_bn') }}">
                        <span class="text-sm text-gray-500">আপনার মায়ের নাম বাংলায় লিখুন।</span>
                        @error('mother_name_bn')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <!-- Occupation and Resident -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="occupation" class="block text-sm font-medium text-gray-700">পেশা</label>
                        <select name="occupation" id="occupation"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">নির্বাচন করুন</option>
                            <option value="1">কৃষক</option>
                            <option value="2">গৃহিণী</option>
                            <option value="3">সরকারি চাকরি</option>
                            <option value="4">বেসরকারি চাকরি</option>
                            <option value="5">ব্যবসায়ী</option>
                            <option value="6">শিক্ষক</option>
                            <option value="7">প্রবাসী</option>
                            <option value="8">ড্রাইভার</option>
                            <option value="9">ডাক্তার</option>
                            <option value="10">আইনজীবী</option>
                            <option value="11">লোহার কারিগর</option>
                            <option value="12">কুমার</option>
                            <option value="13">কারাগারে</option>
                            <option value="14">অন্যান্য</option>
                        </select>
                        <span class="text-sm text-gray-500">দয়া করে পেশা নির্বাচন করুন।</span>
                    </div>
                    <div>
                        <label for="resident" class="block text-sm font-medium text-gray-700">বাসিন্দা</label>
                        <select name="resident" id="resident"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">নির্বাচন করুন</option>
                            <option value="1">অস্থায়ী</option>
                            <option value="2">স্থায়ী</option>
                        </select>
                        <span class="text-sm text-gray-500">দয়া করে নির্বাচন করুন।</span>
                    </div>
                </div>


                <!-- Educational Qualification and Religion -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="educational_qualification" class="block text-sm font-medium text-gray-700">শিক্ষাগত যোগ্যতা</label>
                        <select name="educational_qualification" id="educational_qualification"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">নির্বাচন করুন</option>
                            <option value="1">প্রাথমিক</option>
                            <option value="2">জে.এস.সি.</option>
                            <option value="3">পি.এস.সি.</option>
                            <option value="4">এস.এস.সি.</option>
                            <option value="5">এইচ.এস.সি.</option>
                            <option value="6">স্নাতক</option>
                            <option value="7">স্নাতকোত্তর</option>
                        </select>
                        <span class="text-sm text-gray-500">দয়া করে শিক্ষাগত যোগ্যতা নির্বাচন করুন।</span>
                        @error('educational_qualification')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="religion" class="block text-sm font-medium text-gray-700">ধর্ম</label>
                        <select name="religion" id="religion"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">নির্বাচন করুন</option>
                            <option value="1">ইসলাম</option>
                            <option value="2">হিন্দু</option>
                            <option value="3">বৌদ্ধ</option>
                            <option value="4">খ্রিস্টান</option>
                            <option value="5">অন্যান্য</option>
                        </select>
                        <span class="text-sm text-gray-500">দয়া করে ধর্ম নির্বাচন করুন।</span>
                        @error('religion')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <!-- Gender and Marital Status -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">লিঙ্গ <span class="text-red-500">*</span></label>
                        <div class="mt-1 space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="male" class="form-radio text-blue-500">
                                <span class="ml-2">পুরুষ</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="female" class="form-radio text-blue-500">
                                <span class="ml-2">মহিলা</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="other" class="form-radio text-blue-500">
                                <span class="ml-2">তৃতীয় লিঙ্গ</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label for="marital_status" class="block text-sm font-medium text-gray-700">বৈবাহিক অবস্থা <span class="text-red-500">*</span></label>
                        <select name="marital_status" id="marital_status"
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="" selected disabled>নির্বাচন করুন</option>
                            <option value="single">অবিবাহিত</option>
                            <option value="married">বিবাহিত</option>
                            <option value="widow">বিধবা</option>
                            <option value="other">অন্যান্য</option>
                        </select>
                        <span class="text-sm text-gray-500">দয়া করে নির্বাচন করুন।</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="relation">
                    <div class="" id="husband">
                        <div>
                            <label for="husband_name_en" class="block text-sm font-medium text-gray-700">স্বামীর নাম (ইংরেজিতে)</label>
                            <input type="text" name="husband_name_en" id="husband_name_en"
                                value="{{ old('husband_name_en') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup" placeholder="স্বামীর নাম ইংরেজিতে লিখুন">
                            <span class="text-sm text-gray-500">স্বামীর নাম ইংরেজিতে লিখুন।</span>
                            @error('husband_name_en')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="husband_name_bn" class="block text-sm font-medium text-gray-700">স্বামীর নাম (বাংলায়)</label>
                            <input type="text" name="husband_name_bn" id="husband_name_bn"
                                value="{{ old('husband_name_bn') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="স্বামীর নাম বাংলায় লিখুন">
                            <span class="text-sm text-gray-500">স্বামীর নাম বাংলায় লিখুন।</span>
                            @error('husband_name_bn')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="" id="wife">
                        <div>
                            <label for="wife_name_en" class="block text-sm font-medium text-gray-700">স্ত্রীর নাম (ইংরেজিতে)</label>
                            <input type="text" name="wife_name_en" id="wife_name_en"
                                value="{{ old('wife_name_en') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup" placeholder="স্ত্রীর নাম ইংরেজিতে লিখুন">
                            <span class="text-sm text-gray-500">স্ত্রীর নাম ইংরেজিতে লিখুন।</span>
                            @error('wife_name_en')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="wife_name_bn" class="block text-sm font-medium text-gray-700">স্ত্রীর নাম (বাংলায়)</label>
                            <input type="text" name="wife_name_bn" id="wife_name_bn"
                                value="{{ old('wife_name_bn') }}"
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="স্ত্রীর নাম বাংলায় লিখুন">
                            <span class="text-sm text-gray-500">স্ত্রীর নাম বাংলায় লিখুন।</span>
                            @error('wife_name_bn')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <h4 class="text-lg font-semibold">
                        স্থায়ী ঠিকানা
                    </h4>
                </div>

                <div class="space-y-6">
                    <!-- হোল্ডিং/অ্যাসেসমেন্ট নম্বর -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="permanent_holding_no" class="block text-sm font-medium text-gray-700">
                                হোল্ডিং/অ্যাসেসমেন্ট নম্বর <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="permanent_holding_no" name="permanent_holding_no"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                autocomplete="permanent_holding_no" data-parsley-required data-parsley-trigger="keyup"
                                value="{{ old('permanent_holding_no') }}">
                            <p class="mt-1 text-sm text-gray-500">হোল্ডিং/অ্যাসেসমেন্ট নম্বর ইংরেজিতে প্রদান করুন...</p>
                            @error('permanent_holding_no')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- ওয়ার্ড নম্বর এবং গ্রাম -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="ward_no" class="block text-sm font-medium text-gray-700">
                                ওয়ার্ড নম্বর <span class="text-red-500">*</span>
                            </label>
                            <select id="ward_no" name="ward_no"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                                <option value="">--নির্বাচন করুন--</option>
                                <option value="1">১</option>
                                <option value="2">২</option>
                                <option value="3">৩</option>
                                <option value="4">৪</option>
                                <option value="5">৫</option>
                                <option value="6">৬</option>
                                <option value="7">৭</option>
                                <option value="8">৮</option>
                                <option value="9">৯</option>
                            </select>
                            <p class="mt-1 text-sm text-gray-500">ওয়ার্ড নির্বাচন করুন...</p>
                        </div>
                        <div>
                            <label for="moholla_id" class="block text-sm font-medium text-gray-700">
                                গ্রাম/মহল্লা <span class="text-red-500">*</span>
                            </label>
                            <select id="moholla_id" name="moholla_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                data-parsley-required>
                                <option value="" disabled selected>গ্রাম/মহল্লা নির্বাচন করুন</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">গ্রাম {{ $i }}</option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">গ্রাম/মহল্লা নির্বাচন করুন...</p>
                        </div>
                    </div>

                    <!-- রোড/ব্লক/সেক্টর এবং জেলা -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="permanent_rbs_bn" class="block text-sm font-medium text-gray-700">
                                রোড/ব্লক/সেক্টর (বাংলায়)
                            </label>
                            <input type="text" id="permanent_rbs_bn" name="permanent_rbs_bn"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                placeholder="" autocomplete="permanent_rbs_bn" data-parsley-maxlength="100"
                                data-parsley-trigger="keyup" value="{{ old('permanent_rbs_bn') }}">
                            <p class="mt-1 text-sm text-gray-500">রোড/ব্লক/সেক্টর বাংলায় লিখুন...</p>
                        </div>
                        <div>
                            <label for="permanent_district_id" class="block text-sm font-medium text-gray-700">
                                জেলা <span class="text-red-500">*</span>
                            </label>
                            <select id="permanent_district_id" name="permanent_district_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                onchange="getLocation($(this).val(), 'permanent_district', 'permanent_upazila_append', 'permanent_upazila_id', 'permanent_upazila', 3)">
                                <option value="" selected disabled>-আপনার জেলা নির্বাচন করুন-</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="District {{ $i }}">জেলা {{ $i }}</option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">জেলা নির্বাচন করুন...</p>
                        </div>
                    </div>

                    <!-- উপজেলা এবং পোস্ট অফিস -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="permanent_upazila_id" class="block text-sm font-medium text-gray-700">
                                উপজেলা/থানা <span class="text-red-500">*</span>
                            </label>
                            <select id="permanent_upazila_id" name="permanent_upazila_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                onchange="getLocation($(this).val(), 'permanent_upazila', 'permanent_post_office_append', 'permanent_postoffice_id', 'permanent_postoffice', 6)">
                                <option value="" selected disabled>উপজেলা/থানা নির্বাচন করুন</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="Thana {{ $i }}">থানা {{ $i }}</option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">উপজেলা/থানা নির্বাচন করুন...</p>
                        </div>
                        <div>
                            <label for="permanent_postoffice_id" class="block text-sm font-medium text-gray-700">
                                পোস্ট অফিস <span class="text-red-500">*</span>
                            </label>
                            <select id="permanent_postoffice_id" name="permanent_postoffice_id"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                                onchange="getLocation($(this).val(), 'permanent_postoffice')">
                                <option value="">পোস্ট অফিস নির্বাচন করুন</option>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="Post Office {{ $i }}">পোস্ট অফিস {{ $i }}</option>
                                @endfor
                            </select>
                            <p class="mt-1 text-sm text-gray-500">পোস্ট অফিস নির্বাচন করুন...</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <div class="text-center">
                        <h4 class="text-xl font-bold">গৃহস্থালি জরিপের তথ্য</h4>
                        <hr class="my-4">
                    </div>
                </div>


                <div class="space-y-6">
                    <!-- পুরুষ এবং মহিলা সেকশন -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="male" class="block text-sm font-medium">
                                পুরুষ <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="male" name="male" placeholder="পুরুষের সংখ্যা"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="male" data-parsley-type="number" data-parsley-required=""
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">সংখ্যায় পুরুষের সংখ্যা দিন...</span>
                            @error('male')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="female" class="block text-sm font-medium">
                                মহিলা <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="female" name="female" placeholder="মহিলার সংখ্যা"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="female" data-parsley-type="number" data-parsley-required=""
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">সংখ্যায় মহিলার সংখ্যা দিন...</span>
                            @error('female')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- শিশু এবং প্রতিবন্ধী সেকশন -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="child" class="block text-sm font-medium">শিশু</label>
                            <input type="number" id="child" name="child" placeholder="শিশুদের সংখ্যা"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                            <span class="text-sm text-gray-500">সংখ্যায় শিশুদের সংখ্যা দিন...</span>
                            @error('child')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="handicap" class="block text-sm font-medium">প্রতিবন্ধীর সংখ্যা?</label>
                            <input type="number" id="handicap" name="handicap" placeholder="প্রতিবন্ধীদের সংখ্যা"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="handicap" data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">সংখ্যায় প্রতিবন্ধীদের সংখ্যা দিন...</span>
                            @error('handicap')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- উপার্জনকারী সদস্য এবং নির্ভরশীল সদস্য সেকশন -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="member_of_earning" class="block text-sm font-medium">
                                পরিবারের উপার্জনকারী সদস্যের সংখ্যা
                            </label>
                            <input type="number" id="member_of_earning" name="member_of_earning"
                                placeholder="পরিবারের উপার্জনকারী সদস্যের সংখ্যা"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="member_of_earning" data-parsley-type="number" data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">পরিবারের উপার্জনকারী সদস্যের সংখ্যা দিন...</span>
                            @error('member_of_earning')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="number_of_dependents_family" class="block text-sm font-medium">
                                পরিবারের নির্ভরশীল সদস্যের সংখ্যা
                            </label>
                            <input type="number" id="number_of_dependents_family" name="number_of_dependents_family"
                                placeholder="পরিবারের নির্ভরশীল সদস্যের সংখ্যা"
                                class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                                autocomplete="number_of_dependents_family" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">পরিবারের নির্ভরশীল সদস্যের সংখ্যা দিন...</span>
                            @error('number_of_dependents_family')
                                <span class="text-red-500 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- বাকি অংশও একইভাবে অনুবাদ করা হয়েছে -->
                </div>

                <div class="mt-12">
                    <div class="text-center">
                        <h4 class="text-lg font-semibold">আবাসন সংক্রান্ত তথ্য</h4>
                        <hr class="mt-2 border-gray-300">
                    </div>
                </div>


                <div class="mt-6">
                    <!-- বহুতল ভবন এবং পাকা ভবন -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="multi_building_house" class="block text-sm font-medium text-gray-700">
                                বহুতল ভবন
                            </label>
                            <input type="number" name="multi_building_house" id="multi_building_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="বহুতল ভবনের সংখ্যা দিন" autocomplete="multi_building_house" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">বহুতল ভবনের সংখ্যা প্রদান করুন....</span>
                        </div>

                        <div>
                            <label for="ripe_house" class="block text-sm font-medium text-gray-700">
                                পাকা ভবন
                            </label>
                            <input type="number" name="ripe_house" id="ripe_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="পাকা ভবনের সংখ্যা দিন" autocomplete="ripe_house" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">পাকা ভবনের সংখ্যা প্রদান করুন....</span>
                        </div>
                    </div>

                    <!-- সেমি-পাকা ভবন এবং টিন শেড -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="semi_ripe_house" class="block text-sm font-medium text-gray-700">
                                সেমি-পাকা ভবন
                            </label>
                            <input type="number" name="semi_ripe_house" id="semi_ripe_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="সেমি-পাকা ভবনের সংখ্যা দিন" autocomplete="semi_ripe_house" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">সেমি-পাকা ভবনের সংখ্যা প্রদান করুন....</span>
                        </div>

                        <div>
                            <label for="tin_shed_house" class="block text-sm font-medium text-gray-700">
                                টিন শেড
                            </label>
                            <input type="number" name="tin_shed_house" id="tin_shed_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="টিন শেডের সংখ্যা দিন" autocomplete="tin_shed_house" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">টিন শেডের সংখ্যা প্রদান করুন....</span>
                        </div>
                    </div>

                    <!-- কাঁচা ঘর -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="raw_house" class="block text-sm font-medium text-gray-700">
                                কাঁচা ঘর
                            </label>
                            <input type="number" name="raw_house" id="raw_house" value=""
                                class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="কাঁচা ঘরের সংখ্যা দিন" autocomplete="raw_house" data-parsley-type="number"
                                data-parsley-trigger="keyup">
                            <span class="text-sm text-gray-500">কাঁচা ঘরের সংখ্যা প্রদান করুন....</span>
                        </div>
                    </div>
                </div>


                <hr class="my-8 border-gray-300">

                <!-- Annual evaluation and Tax -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="probable_rate" class="block text-sm font-medium text-gray-700">
                            বার্ষিক মূল্যায়ন <span class="text-red-500">*</span>
                        </label>
                        <input type="number" name="probable_rate" id="probable_rate" value=""
                            class="mt-1 block w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="বার্ষিক মূল্যায়ন" autocomplete="probable_rate" data-parsley-required=""
                            data-parsley-type="number" data-parsley-trigger="keyup">
                        <span class="text-sm text-gray-500">দয়া করে বার্ষিক মূল্যায়ন দিন....</span>
                        @error('probable_rate')
                            <span class="text-red-500 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="halson_percentage" class="block text-sm font-medium text-gray-700">
                            ধার্যকৃত কর <span class="text-red-500">*</span>
                        </label>
                        <span class="block text-gray-500 text-xs">(আইন অনুযায়ী ধার্যকৃত কর ১-৭%)</span>
                        <div class="flex mt-1 space-x-2">
                            <input type="number" step="any" name="halson_percentage" id="halson_percentage" value=""
                                class="block w-1/2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="%">
                            <input type="number" name="halson_tax" id="halson_tax" value=""
                                class="block w-1/2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="কর" readonly>
                        </div>
                        <span class="text-sm text-gray-500">দয়া করে প্রযোজ্য কর প্রদান করুন....</span>
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
