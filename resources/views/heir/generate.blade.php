<x-app-layout>
    <x-app-layout>
        <div class="col-lg-12 col-sm-12">
            <div class="container">
                <h3 class="mt-2" style="margin-top:0px;margin-bottom: 20px;background:lightgray;padding:5px;text-align:center;">
                    {{ __('heir.fee_form_title') }}
                </h3>
                <form action="{{ url('Genarate/warishGenarate_action') }}" method="post" id="validall" enctype="multipart/form-data" class="warishGenarate form-horizontal" role="form">
                    @csrf
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.tracking_no') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="trackid" id="trackid" value="669848" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.name') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="name" id="name" value="Late Md. Delwar Hossain" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.fathers_name') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="bfname" id="bfname" value="Late Haji Md. Siddique" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.mobile_no') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="mobile" id="mobile" maxlength="11" value="01816815389" readonly>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.verifier') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="verifier_name" id="verifier_name">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.payment_type') }}</label>
                        <div class="col-sm-4">
                            <select name="acno" class="form-control highlisht_font">
                                <option value="0000-0000-0000-0000">{{ __('heir.cash_account') }}</option>
                                <option value="2216/0">{{ __('heir.chairman_account') }}</option>
                                <option value="2191/1">{{ __('heir.birth_registration_account') }}</option>
                                <option value="1603033008083">{{ __('heir.lgsp_account') }}</option>
                                <option value="22751">{{ __('heir.land_transfer_tax_account') }}</option>
                                <option value="0001-0001-0001-0001">{{ __('heir.own_fund_cash') }}</option>
                                <option value="0002-0002-0002-0002">{{ __('heir.own_fund_birth_registration') }}</option>
                                <option value="0003-0003-0003-0003">{{ __('heir.dev_fund_lgsp') }}</option>
                                <option value="0004-0004-0004-0004">{{ __('heir.dev_fund_land_transfer_tax') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start" style="color: red;">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.fee') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font" name="fee" id="fee" value="0.00" style="color: red;">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-start">
                        <label class="control-label col-sm-2 highlisht_font">{{ __('heir.issued_date') }}</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control highlisht_font hasDatepicker" id="dofb" name="payment_date" value="30-12-2024">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-center mb-3 justify-content-end">
                        <div class="col-sm-offset-8 col-sm-4">
                            <input type="submit" class="btn btn-info btn-sm" value="{{ __('heir.generate') }}">
                            <input type="hidden" name="uid" value="1698">
                            <input type="hidden" name="apno" value="1698">
                            <input type="hidden" name="gentype" value="Generate">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>

</x-app-layout>
