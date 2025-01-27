<x-app-layout>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">{{ __('messages.basic_card_example') }}</div>
            <div class="card-body">
                <div class="container">
                    <form action="" method="get" enctype="multipart/form-data" class="form-horizontal" id="union_setup_form">
                        @csrf
                        <div class="row">
                            <!-- Left column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_bengali" class="control-label">
                                        {{ __('messages.name_union_parishad_bengali') }}
                                    </label>
                                    <input type="text" name="name_bengali" id="name_bengali" class="form-control" placeholder="{{ __('messages.provide_name_union_parishad') }}" value="{{ old('name_bengali', 'কাউন্দিয়া ইউনিয়ন পরিষদ') }}">
                                </div>

                                <div class="form-group">
                                    <label for="village_area_bengali" class="control-label">
                                        {{ __('messages.village_area_bengali') }}
                                    </label>
                                    <input type="text" name="village_area_bengali" id="village_area_bengali" class="form-control" placeholder="{{ __('messages.village_area_bengali') }}" value="{{ old('village_area_bengali', 'ঢাকা') }}">
                                </div>

                                <div class="form-group">
                                    <label for="thana_bengali" class="control-label">
                                        {{ __('messages.thana_upazila_bengali') }}
                                    </label>
                                    <input type="text" name="thana_bengali" id="thana_bengali" class="form-control" placeholder="{{ __('messages.thana_upazila_bengali') }}" value="{{ old('thana_bengali', 'মোহাম্মদপুর') }}">
                                </div>

                                <div class="form-group">
                                    <label for="district_bengali" class="control-label">
                                        {{ __('messages.district_bengali') }}
                                    </label>
                                    <input type="text" name="district_bengali" id="district_bengali" class="form-control" placeholder="{{ __('messages.district_bengali') }}" value="{{ old('district_bengali', 'ঢাকা') }}">
                                </div>

                                <div class="form-group">
                                    <label for="postal_code_bengali" class="control-label">
                                        {{ __('messages.postal_code_bengali') }}
                                    </label>
                                    <input type="text" name="postal_code_bengali" id="postal_code_bengali" class="form-control" placeholder="{{ __('messages.postal_code_bengali') }}" value="{{ old('postal_code_bengali', '1207') }}">
                                </div>

                                <div class="form-group">
                                    <label for="website" class="control-label">
                                        {{ __('messages.website_link_english') }}
                                    </label>
                                    <input type="url" name="website" id="website" class="form-control" placeholder="{{ __('messages.website_link_english') }}" value="{{ old('website', 'https://example.com') }}">
                                </div>
                            </div>

                            <!-- Right column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="union_code" class="control-label">
                                        {{ __('messages.union_code_english') }}
                                    </label>
                                    <input type="text" name="union_code" id="union_code" class="form-control" placeholder="{{ __('messages.union_code_english') }}" value="{{ old('union_code', '2617250') }}">
                                </div>

                                <div class="form-group">
                                    <label for="upazila_code" class="control-label">
                                        {{ __('messages.upazila_code_english') }}
                                    </label>
                                    <input type="text" name="upazila_code" id="upazila_code" class="form-control" placeholder="{{ __('messages.upazila_code_english') }}" value="{{ old('upazila_code', '1256') }}">
                                </div>

                                <div class="form-group">
                                    <label for="mobile_bengali" class="control-label">
                                        {{ __('messages.mobile_number_bengali') }}
                                    </label>
                                    <input type="text" name="mobile_bengali" id="mobile_bengali" class="form-control" placeholder="{{ __('messages.mobile_number_bengali') }}" value="{{ old('mobile_bengali', '০১৭০০০০০০০০') }}">
                                </div>

                                <div class="form-group">
                                    <label for="phone_bengali" class="control-label">
                                        {{ __('messages.phone_number_bengali') }}
                                    </label>
                                    <input type="text" name="phone_bengali" id="phone_bengali" class="form-control" placeholder="{{ __('messages.phone_number_bengali') }}" value="{{ old('phone_bengali', '০২৯৯৯৯৯৯৯৯') }}">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label">
                                        {{ __('messages.email') }}
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('messages.email') }}" value="{{ old('email', 'example@domain.com') }}">
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('messages.update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
