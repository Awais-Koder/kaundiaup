<x-app-layout>
    <div class="col-lg-12 col-sm-12">
        <div class="container">
            <h3 class="mt-2" style="margin-top:0px;margin-bottom: 20px;background:lightgray;padding:5px;text-align:center;">
                {{ __('messages.citizenship_certificate_fee_form') }}
            </h3>
            <form action="{{ url('Genarate/nagorickGenarate_action') }}" method="post" id="nagorickGenarate" enctype="multipart/form-data" class="form-horizontal" role="form">
                @csrf
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <div class="col-sm-6 col-sm-offset-2">
                        <img src="https://www.kaundiaup.com//library/profile/1394474149n20241226122258.jpg" width="160" height="150">
                        <input type="hidden" name="profile" value="">
                        <input type="hidden" name="seba_type" value="1">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.tracking_number') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="trackid" id="trackid" value="643681" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.name') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="name" id="name" value="মোঃ সাইফুল ইসলাম শাকিল" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.fathers_name') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="bfname" id="efname" value="মৃত আজাদ " readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.mobile_number') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="mobile" id="mobile" maxlength="11" value="01629006006" readonly>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.attachment') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font" name="attachment" id="attachment" value="{{ __('messages.attachment_description') }}">
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
                        <select name="acno" class="form-control highlisht_font">
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
                        <input type="text" class="form-control highlisht_font" name="fee" id="fee" value="0.00" style="color: red;">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <label class="control-label col-sm-2 highlisht_font">{{ __('messages.issued_date') }}</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control highlisht_font hasDatepicker" value="29-12-2024" id="dofb" name="payment_date">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="{{ __('messages.generate') }}" class="btn btn-info btn-sm">
                        <input type="hidden" name="uid" value="6835">
                        <input type="hidden" name="gentype" value="Generate">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
