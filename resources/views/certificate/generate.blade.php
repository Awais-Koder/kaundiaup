<x-app-layout>
    <div class="col-lg-12 col-sm-12">
        <div class="container">
            <h3 class="mt-2" style="margin-top:0px;margin-bottom: 20px;background:lightgray;padding:5px;text-align:center;">
                {{ __('messages.citizenship_certificate_fee_form') }}
            </h3>
            <form action="{{ route('certificate.generate.store' , $data->id) }}" method="post" id="nagorickGenarate" enctype="multipart/form-data" class="form-horizontal" role="form">
                @csrf
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <div class="col-sm-6 col-sm-offset-2">
                        <img src="{{ $data->image ? Storage::url($data->image) : 'https://www.kaundiaup.com/img/default/profile.png' }}"
                                        width="150">
                        {{-- <input type="hidden" name="profile" value="">
                        <input type="hidden" name="seba_type" value="1"> --}}
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.tracking_number') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="" id="trackid" value="{{$data->tracking_number}}" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.name') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="" id="name" value="{{$data->name_bn}}" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.fathers_name') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="" id="efname" value="{{$data->father_name_bn}}" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.mobile_number') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="" id="mobile" maxlength="11" value="{{$data->mobile}}" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.attachment') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="attachemnt" id="attachment" value="{{ __('messages.attachment_description') }}">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.investigator') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="investigator" id="investigator">
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.payment_type') }}</label>
                    <div class="col-sm-4">
                        <select class="form-control highlisht_font" name="payment_type">
                            <option value="0000-0000-0000-0000">{{ __('messages.cash_account') }}</option>
                            <option value="2216/0">{{ __('messages.chairman_account') }}</option>
                            <option value="2191/1">{{ __('messages.birth_registration_account') }}</option>
                            <option value="1603033008083">{{ __('messages.lgsp_account') }}</option>
                            <option value="22751">{{ __('messages.land_transfer_tax_account') }}</option>
                            <option value="0001-0001-0001-0001">{{ __('messages.own_fund_cash') }}</option>
                            <option value="0002-0002-0002-0002">{{ __('messages.own_fund_birth_registration') }}</option>
                            <option value="0003-0003-0003-0003">{{ __('messages.dev_fund_lgsp') }}</option>
                            <option value="0004-0004-0004-0004">{{ __('messages.dev_fund_land_transfer_tax') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start" style="color: red;">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.fees') }}</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control highlisht_font" name="fees" id="fee" value="0.00" style="color: red;">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.issued_date') }}</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="" name="issued_date">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="{{ __('messages.generate') }}" class="btn btn-info btn-sm">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
